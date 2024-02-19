const Receita = require("../models/receitas.js");

const mongoose = require("mongoose");

var express = require("express"),
    router = express.Router();


// OBTER TODAS AS RECEITAS
router.get("/", function(req, res) {
    Receita.find({}, function(err, data) {
        if (err) {
            res.send(err);
            return;
        }
        res.send(data);
    });
});

// OBTER UMA RECEITA POR ID
router.get("/:id", function(req, res) {
    var id = req.params.id;

    // Verifico se o ID é um ObjectId ou um inteiro
    if (id.length  < 24) {
        id = parseInt(id);
    } else id = mongoose.Types.ObjectId(id);


    Receita.find({ _id: id }, function(err, data) {
        if (err) {
            res.send("Não existe nenhuma receita com o ID: " + id);
            return;
        } else if (data.length == 0) {
            res.send("Não existe nenhuma receita com o ID: " + id);
            return;
        }
        
        res.send(data[0]);
    });
});

// CRIAR UMA RECEITA
router.post("/", function(req, res) {
    var {titulo, descricao, tempoPreparacao, dificuldade, imagem, pasos, categoria_id, utilizador_id, ingrediente_id} = req.body;


    if (ingrediente_id.length > 0) {
        for (let i = 0; i < ingrediente_id.length; i++) {
            // Em caso de ser uma string converto o ID da receita para um ObjectId 
            if (typeof ingrediente_id[i] === 'string'){
                ingrediente_id[i] = mongoose.Types.ObjectId(ingrediente_id[i]);
            }
        }
    }

    // Converto as Strings em ObjectId
    categoria_id = mongoose.Types.ObjectId(categoria_id);
    utilizador_id = mongoose.Types.ObjectId(utilizador_id);

    var model = new Receita({
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
    model.save(function(err) {
        if (err) {
            res.send(err);
            return;
        }
        res.send("Receita criada com o titulo: " + titulo);
    });
});

// ATUALIZAR UMA RECEITA POR ID
router.put("/:id", function(req, res) {
    var id = req.params.id;
    var {titulo, descricao, tempoPreparacao, dificuldade, imagem, pasos, categoria_id, utilizador_id, ingrediente_id} = req.body;

    // Verifico se o ID é um ObjectId ou um inteiro
    if (id.length  < 24) {
        id = parseInt(id);
    } else id = mongoose.Types.ObjectId(id);

    if (ingrediente_id.length > 0) {
        for (let i = 0; i < ingrediente_id.length; i++) {
            // Em caso de ser uma string converto o ID da receita para um ObjectId 
            if (typeof ingrediente_id[i] === 'string'){
                ingrediente_id[i] = mongoose.Types.ObjectId(ingrediente_id[i]);
            }
        }
    }

    // Converto as Strings em ObjectId
    categoria_id = mongoose.Types.ObjectId(categoria_id);
    utilizador_id = mongoose.Types.ObjectId(utilizador_id);

    Receita.findByIdAndUpdate(id, { titulo: titulo, descricao: descricao, tempoPreparacao: tempoPreparacao, dificuldade: dificuldade, imagem: imagem, pasos: pasos, categoria_id: categoria_id, utilizador_id: utilizador_id, ingrediente_id: ingrediente_id},
        function(err) {
            if (err) {
                res.send(err);
                return;
            }
            res.send("Receita com o ID: " + id +" atualizada com sucesso!");
        });
});

// APAGAR UMA RECEITA por ID
router.delete("/:id", function(req, res) {
    var id = req.params.id;

    // Verifico se o ID é um ObjectId ou um inteiro
    if (id.length  < 24) {
        id = parseInt(id);
    } else id = mongoose.Types.ObjectId(id);


    Receita.findByIdAndRemove(id, function(err) {
        if (err) {
            res.send(err);
            return;
        } 
        res.send("Receita com o ID: " + id +" apagada com sucesso!");
    });
});

module.exports = router;