const Utilizador = require("../models/utilizadores.js");

const mongoose = require("mongoose");

var express = require("express"),
    router = express.Router();


// OBTER TODOS OS UTILIZADORES
router.get("/", function(req, res) {
    Utilizador.find({}, function(err, data) {
        if (err) {
            res.send(err);
            return;
        }
        res.send(data);
    });
});

// OBTER TODOS OS UTILIZADORES COM UM DETERMINADO EMAIL
router.get("/email", function(req, res) {
    var {email} = req.body;

    Utilizador.findOne({ email: email }, function(err, data) {
        if (err) {
            res.send(err);
            return;
        } else if (!data) {
            res.send("No existe ningún usuario con el correo electrónico: " + email);
            return;
        }

        res.send(data);
    });
});

// OBTER UM UTILIZADOR POR ID
router.get("/:id", function(req, res) {
    var id = req.params.id;
    Utilizador.findOne({ _id: id }, function(err, data) {
        if (err) {
            res.send(err);
            return;
        } else if (!data) {
            res.send("Não existe nenhum utilizador com o ID: " + id);
            return;
        }
        res.send(data);
    });
});

// CRIAR UM UTILIZADOR
router.post("/", function(req, res) {
    var {username, password, email, favoritos} = req.body;

    //en caso de adicionar algo nos favoritos
    for (let i = 0; i < favoritos.length; i++) {
        // Em caso de ser uma string converto o ID da receita para um ObjectId 
        if (typeof favoritos[i] === 'string'){
            favoritos[i] = mongoose.Types.ObjectId(favoritos[i]);
        }
    }

    var model = new Utilizador({
        _id: new mongoose.Types.ObjectId(),
        username: username,
        password: password,
        email: email,
        favoritos: favoritos
    });
    model.save(function(err) {
        if (err) {
            res.send(err);
            return;
        }
        res.send("Utilizador criado com o username: " + username);
    });
});

// ATUALIZAR UM UTILIZADOR
router.put("/:id", function(req, res) {
    var id = req.params.id;
    var {username, password, email, favoritos} = req.body;

   
    for (let i = 0; i < favoritos.length; i++) {
        // Em caso de ser uma string converto o ID da receita para um ObjectId 
        if (typeof favoritos[i] === 'string'){
            favoritos[i] = mongoose.Types.ObjectId(favoritos[i]);
        }
    }
    

    Utilizador.findByIdAndUpdate(id, { username: username, password: password, email: email, favoritos: favoritos },
        function(err) {
            if (err) {
                res.send(err);
                return;
            }
            res.send("Utilizador com o ID: " + id +" atualizado com sucesso!");
        });
});

// APAGAR UM UTILIZADOR por ID
router.delete("/:id", function(req, res) {
    var id = req.params.id;
    Utilizador.findByIdAndRemove(id, function(err) {
        if (err) {
            res.send(err);
            return;
        }
        res.send("Utilizador com o ID: " + id +" apagado com sucesso!");
    });
});

module.exports = router;