const Utilizador = require("../models/utilizadores.js");
const Categoria = require("../models/categorias.js");
const Comentario = require("../models/comentarios.js");
const Ingrediente = require("../models/ingredientes.js");
const Receita = require("../models/receitas.js");

const multer = require('multer');
const path = require('path');
const mongoose = require("mongoose");

var express = require("express"),
    router = express.Router();


// CONFIGURAÇÂO DO MULTER PARA FAZER A GESTÃO DO UPLOAD DE IMAGENS
const storage = multer.diskStorage({
    destination: './public/images/', // PASTA ONDE AS IMAGENS FICAM GUARDADAS
    filename: function (req, file, cb) {
      // UTILIZO O NOME ORIGINAL DA IMAGEM E ADICIONO A DATA ATUAL PARA QUE NÃO HAJA IMAGENS COM O MESMO NOME
      cb(null, file.originalname + '-' + Date.now() + path.extname(file.originalname));
    }
});    

const upload = multer({ storage: storage });

// SISTEMA DE AUTENTICAÇÃO

router.post("/signup", function(req, res) {
    var {username, email, password} = req.body;

    Utilizador.findOne({ email: email }, function(err, data) { 
        if (err) {
            res.send(err);
            return;
        }
        // Verifico se já existe um utilizador com o email fornecido
        if (!data) {
            if ((email.includes('@') && email.includes('.')) == false) {
                res.status(400).json({message: 'O email introduzido não valido'});
            } else if (password.length < 6) {
                res.status(400).json({message: 'A palavra-passe deve ter no minimo 6 caracteres!'});
            } else {
                var utilizador = new Utilizador({ username: username, email: email, password: password});
                utilizador.save(function(err, data) {
                    if (err) {
                        res.send(err);
                        return;
                    }
                    res.status(200).json(data);
                });
            }
        } else {
            res.status(401).json({message: 'O email inserido já se encontra em uso!'}); 
        }
    });
});

router.post("/login", function(req, res) {
    var {email, password} = req.body;

    if ((email.includes('@') && email.includes('.')) == false){
        res.status(400).json({message: 'O email introduzido não valido'});
    } else {
        Utilizador.findOne({email: email}, function(err,data){
            if (err){
                res.send(err);
                return;
            }
            if (!data){
                res.status(401).json({message: 'O email inserido não se encontra registado!'});
            } else if (password.length < 6) {
                res.status(401).json({message: 'A palavra-passe deve ter no minimo 6 caracteres!'});
            } else if (data.password != password){
                res.status(401).json({message: 'A palavra-passe inserida está incorreta!'});
            } else {
                res.status(200).json(data);
            }
        });
    }
});

// EXPLORAÇÃO DE RECEITAS

router.get("/receitas", function(req, res) {
    Receita.find({}, function(err, data) {
        if (err) {
            res.send(err);
            return;
        }
        res.json(data);
    });
});

// VISUALIZAÇÃO DE RECEITAS POR ID

router.get("/receitas/:id", function(req, res) {
    var id = req.params.id;

    // Verifico se o ID é um ObjectId ou um inteiro
    if (id.length < 24) {
        id = parseInt(id);
    } else {
        id = mongoose.Types.ObjectId(id);
    }

    // Utiliza populate para obtener información adicional
    Receita.find({ _id: id })
        .populate('utilizador_id', 'username')  // OBTER O USERNAME DO UTILIZADOR QUE CRIOU, populate = left join
        .populate('categoria_id', 'nome')       // OBTER O NOME DA CATEGORIA
        .populate('ingrediente_id', 'nome')     // OBTER O NOME DOS INGREDIENTES
        .exec(function(err, data) {
            if (err) {
                res.send("Não existe nenhuma receita com o ID: " + id);
                return;
            } else if (data.length === 0) {
                res.send("Não existe nenhuma receita com o ID: " + id);
                return;
            }

            res.json(data[0]);
        });
});


// OBTER CATEGORIAS PARA MOSTRAR AO UTILIZADOR NA CRIAÇÃO DE UMA RECEITA
router.get("/categorias", function(req, res) {
    Categoria.find({}, function(err, data) {
        if (err) {
            res.send(err);
            return;
        }
        res.send(data);
    });
});

// CRIAR UMA RECEITA
// router.post("/receitas", upload.single('imagem'), async function(req, res) {
//     try {
//         var { arrayIngredientes, titulo, descricao, tempoPreparacao, dificuldade, pasos, nomeCategoria, utilizador_id} = req.body;
//         var categoria_id;
//         var ingrediente_id = []; 

//         arrayIngredientes = JSON.parse(arrayIngredientes);
//         pasos = JSON.parse(pasos);

//         // OBTER O CAMINHO DA IMAGEM
//         const imagenPath = req.file ? req.file.path.replace('public', '') : null;

//         // Converto a string do id do utilizador em ObjectId
//         utilizador_id = mongoose.Types.ObjectId(utilizador_id);

//         // Procuro a categoria pelo nome
//         const categoria = await Categoria.findOne({ nome: nomeCategoria }).exec();
//         // Obtengo o ID da categoria
//         categoria_id = categoria._id;

//         // Converto a string do id da categoria em ObjectId
//         categoria_id = mongoose.Types.ObjectId(categoria_id);

//         // Utilizo o Promise.all para esperar que todas as promessas sejam resolvidas
//         await Promise.all(arrayIngredientes.map(async (nomeIngrediente) => {
//             // Procuro o ingrediente pelo nome
//             const ingrediente = await Ingrediente.findOne({ nome: nomeIngrediente }).exec();

//             // Se o ingrediente não existir na base de dados, crio um novo
//             if (!ingrediente) {
//                 const nuevoIngrediente = new Ingrediente({
//                     _id: new mongoose.Types.ObjectId(),
//                     nome: nomeIngrediente,
//                     receita_id: []
//                 });
//                 await nuevoIngrediente.save();
//                 ingrediente_id.push(nuevoIngrediente._id);
//             } else {
//                 // Se o ingrediente já existir na base de dados, meto o ID do ingrediente no array de IDs
//                 ingrediente_id.push(ingrediente._id);
//             }
//         }));

//         // Crio a receita
//         var receita = new Receita({
//             _id: new mongoose.Types.ObjectId(),
//             titulo: titulo,
//             descricao: descricao,
//             tempoPreparacao: tempoPreparacao,
//             dificuldade: dificuldade,
//             imagem: imagenPath,
//             pasos: pasos,
//             categoria_id: categoria_id,
//             utilizador_id: utilizador_id,
//             ingrediente_id: ingrediente_id
//         });

//         // Guardo a receita
//         await receita.save();

//         // Atualizo o array de receitas de cada ingrediente
//         await Promise.all(ingrediente_id.map(async (id) => {
//             await Ingrediente.findByIdAndUpdate(id, { $addToSet: { receita_id: receita._id } });
//         }));

//         res.status(200).json(receita);
//     } catch (error) {
//         res.status(500).json({ error: error.message });
//     }
// });

// OBTER COMENTARIOS DE UMA RECEITA
router.get("/comentarios/:id", function(req, res) {
    var id = req.params.id;

    // Verifico se o ID é um ObjectId ou um inteiro
    if (id.length < 24) {
        id = parseInt(id);
    } else {
        id = mongoose.Types.ObjectId(id);
    }

    Comentario.find({ receita_id: id })
        .populate('utilizador_id', 'username')  // OBTER O USERNAME DO UTILIZADOR QUE FEZ O COMENTARIO, populate = left join
        .exec(function(err, data) {
            if (err) {
                res.send(err);
                return;
            } else if (data.length === 0) {
                res.json(data);
                return;
            }
            res.json(data);
        });
});


// ADICIONAR UM COMENTARIO A UMA RECEITA
router.post("/comentarios/:id/:utilizador_id", function(req, res) {
    var receita_id = req.params.id;
    var utilizador_id = req.params.utilizador_id;
    var { pontuacao, descricao } = req.body;

    // Converto a string do id do utilizador em ObjectId
    utilizador_id = mongoose.Types.ObjectId(utilizador_id);

    // Verifico se o ID da receita é um ObjectId ou um inteiro
    if (receita_id.length  < 24) {
        receita_id = parseInt(receita_id);
    } else receita_id = mongoose.Types.ObjectId(receita_id);

    var comentario = new Comentario({
        _id: new mongoose.Types.ObjectId(),
        pontuacao: pontuacao,
        descricao: descricao,
        utilizador_id: utilizador_id,
        receita_id: receita_id
    });
    
    comentario.save(function(err, data) {
        if (err) {
            res.send(err);
            return;
        }
        res.json(data);
    });
});

// OBTER AS RECEITAS FAVORITAS DE UM UTILIZADOR
router.get("/favoritos/:id", async function(req, res) {
    var  utilizador_id  = req.params.id;

    // Converto a string do id do utilizador em ObjectId
    utilizador_id = mongoose.Types.ObjectId(utilizador_id);

    try {
        const utilizador = await Utilizador.findById(utilizador_id).exec();
        const receitasFavoritas = utilizador.favoritos;

        
        const receitasPromises = receitasFavoritas.map(async (id) => {
            return await Receita.findById(id).exec();
        });

        const receitas = await Promise.all(receitasPromises);

        res.json(receitas);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
});

// ADICIONAR UMA RECEITA AOS FAVORITOS DE UM UTILIZADOR
router.post("/favoritos/:id/:utilizador_id", function(req, res) {
    var receita_id = req.params.id;
    var utilizador_id = req.params.utilizador_id;

    // Converto a string do id do utilizador em ObjectId
    utilizador_id = mongoose.Types.ObjectId(utilizador_id);

    // Verifico se o ID da receita é um ObjectId ou um inteiro
    if (receita_id.length  < 24) {
        receita_id = parseInt(receita_id);
    } else receita_id = mongoose.Types.ObjectId(receita_id);

    Utilizador.findByIdAndUpdate(utilizador_id, { $addToSet: { favoritos: receita_id } }, function(err, data) {
        if (err) {
            res.send(err);
            return;
        }
        res.json(data);
    });
});

// REMOVER UMA RECEITA DOS FAVORITOS DE UM UTILIZADOR
router.delete("/favoritos/:id/:user_id", function(req, res) {
    var utilizador_id = req.params.user_id;
    var receita_id = req.params.id;

    // Converto a string do id do utilizador em ObjectId
    utilizador_id = mongoose.Types.ObjectId(utilizador_id);

    // Verifico se o ID da receita é um ObjectId ou um inteiro
    if (receita_id.length < 24) {
        receita_id = parseInt(receita_id);
    } else {
        receita_id = mongoose.Types.ObjectId(receita_id);
    }

    Utilizador.findByIdAndUpdate(utilizador_id, { $pull: { favoritos: receita_id } }, function(err, data) {
        if (err) {
            res.send(err);
            return;
        }
        res.json(data);
    });
});

// OBTER AS RECEITAS PUBLICADAS POR UM UTILIZADOR
router.get("/utilizador/receitas/:id", function(req, res) {
    var utilizador_id = req.params.id;

    // Converto a string do id do utilizador em ObjectId
    utilizador_id = mongoose.Types.ObjectId(utilizador_id);

    Receita.find({ utilizador_id: utilizador_id }, function(err, data) {
        if (err) {
            res.send(err);
            return;
        } else if (data.length == 0) {
            res.json(data);
            return;
        } else  res.json(data);
    });
});

// ELIMINAR UMA RECEITA PUBLICADA POR UM UTILIZADOR
router.delete("/utilizador/receitas/:id", function(req, res) {
    var receita_id = req.params.id;

    // Verifico se o ID da receita é um ObjectId ou um inteiro
    if (receita_id.length < 24) {
        receita_id = parseInt(receita_id);
    } else {
        receita_id = mongoose.Types.ObjectId(receita_id);
    }

    Receita.findByIdAndDelete(receita_id, function(err) {
        if (err) {
            res.send(err);
            return;
        }
        res.json("Receita eliminada com sucesso!");
    });
});

//  OBTER OS DADOS DE TODOS OS UTILIZADORES
router.get("/admin", function(req, res) {
    Utilizador.find({}, function(err, data) {
        if (err) {
            res.send(err);
            return;
        }
        res.json(data);
    });
});
    

// ELIMINAR UM UTILIZADOR POR USERNAME
router.delete("/admin/:id", function(req, res) {
    var id = req.params.id

    Utilizador.findOneAndDelete({ _id: id }, function(err) {
        if (err) {
            res.send(err);
            return;
        }
        res.json("Utilizador eliminado com sucesso!");
    });
});



// CRIAR UMA RECEITA TEST SEM MULTER
router.post("/receitas", async function(req, res) {
    try {
        var { arrayIngredientes, titulo, descricao, tempoPreparacao, dificuldade, imagem, pasos, nomeCategoria, utilizador_id } = req.body;
        var categoria_id;
        var ingrediente_id = [];

        // Converto a do string do id de  utilizador em ObjectId
        utilizador_id = mongoose.Types.ObjectId(utilizador_id);

        // Procuro a categoria pelo nome
        const categoria = await Categoria.findOne({ nome: nomeCategoria }).exec();
        // Obtengo o ID da categoria
        categoria_id = categoria._id;

        // Converto a do string do id de categoria em ObjectId
        categoria_id = mongoose.Types.ObjectId(categoria_id);

        // Utilizo o Promise.all para esperar que todas as promessas sejam resolvidas
        await Promise.all(arrayIngredientes.map(async (nomeIngrediente) => {
            // Procuro o ingrediente pelo nome
            const ingrediente = await Ingrediente.findOne({ nome: nomeIngrediente }).exec();

            // Se o ingrediente não existir na base de dados, crio um novo
            if (!ingrediente) {
                const nuevoIngrediente = new Ingrediente({
                    _id: new mongoose.Types.ObjectId(),
                    nome: nomeIngrediente,
                    receita_id: []
                });
                await nuevoIngrediente.save();
                ingrediente_id.push(nuevoIngrediente._id);
            } else {
                // Se o ingrediente já existir na base de dados, meto o ID do ingrediente no array de IDs
                ingrediente_id.push(ingrediente._id);
            }
        }));

        // Crio a receita
        var receita = new Receita({
            _id: new mongoose.Types.ObjectId(),
            titulo: titulo,
            descricao: descricao,
            tempoPreparacao: tempoPreparacao,
            dificuldade: dificuldade,
            imagem: imagem,
            pasos: pasos,
            categoria_id: categoria_id,
            utilizador_id: utilizador_id,
            ingrediente_id: ingrediente_id
        });

        // Guardo a receita
        await receita.save();

        // Atualizo o array de receitas de cada ingrediente
        await Promise.all(ingrediente_id.map(async (id) => {
            await Ingrediente.findByIdAndUpdate(id, { $push: { receita_id: receita._id } });
        }));

        res.status(200).json(receita);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
});








module.exports = router;