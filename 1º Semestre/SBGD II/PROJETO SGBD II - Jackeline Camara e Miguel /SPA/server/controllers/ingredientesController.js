const Ingrediente = require("../models/ingredientes.js");

const mongoose = require("mongoose");

var express = require("express"),
    router = express.Router();


// OBTER TODOS OS INGREDIENTES
router.get("/", function(req, res) {
    Ingrediente.find({}, function(err, data) {
        if (err) {
            res.send(err);
            return;
        }
        res.send(data);
    });
});

// OBTER UM INGREDIENTE POR ID
router.get("/:id", function(req, res) {
    var id = req.params.id;

    // Verifico se o ID é um ObjectId ou um inteiro
    if (id.length  < 24) {
        id = parseInt(id);
    } else id = mongoose.Types.ObjectId(id);


    Ingrediente.find({ _id: id }, function(err, data) {
        if (err) {
            res.send("Não existe nenhum comentario com o ID: " + id);
            return;
        } else if (data.length == 0) {
            res.send("Não existe nenhum comentario com o ID: " + id);
            return;
        }
        
        res.send(data[0]);
    });
});

// CRIAR UM INGREDIENTE
router.post("/", function(req, res) {
    var {nome ,receita_id} = req.body;

    if (receita_id.length > 0) {
        for (let i = 0; i < receita_id.length; i++) {
            // Em caso de ser uma string converto o ID da receita para um ObjectId 
            if (typeof receita_id[i] === 'string'){
                receita_id[i] = mongoose.Types.ObjectId(receita_id[i]);
            }
        }
    }

    var model = new Ingrediente({
        _id: new mongoose.Types.ObjectId(),
        nome: nome,
        receita_id: receita_id
    });
    model.save(function(err) {
        if (err) {
            res.send(err);
            return;
        }
        res.send("Ingrediente criado com o nome: " + nome);
    });
});

// ATUALIZAR UM INGREDIENTE POR ID
router.put("/:id", function(req, res) {
    var id = req.params.id;
    var {nome ,receita_id} = req.body;

    // Verifico se o ID é um ObjectId ou um inteiro
    if (id.length  < 24) {
        id = parseInt(id);
    } else id = mongoose.Types.ObjectId(id);

    // Em caso de ser uma string converto o ID da receita para um ObjectId 
    if (receita_id.length > 0) {
        for (let i = 0; i < receita_id.length; i++) {
            // Em caso de ser uma string converto o ID da receita para um ObjectId 
            if (typeof receita_id[i] === 'string'){
                receita_id[i] = mongoose.Types.ObjectId(receita_id[i]);
            }
        }
    }

    Ingrediente.findByIdAndUpdate(id, { nome: nome, receita_id: receita_id},
        function(err) {
            if (err) {
                res.send(err);
                return;
            } 
            res.send("Ingrediente com o ID: " + id +" atualizado com sucesso!");
        });
});

// APAGAR UM INGREDIENTE por ID
router.delete("/:id", function(req, res) {
    var id = req.params.id;

    // Verifico se o ID é um ObjectId ou um inteiro
    if (id.length  < 24) {
        id = parseInt(id);
    } else id = mongoose.Types.ObjectId(id);


    Ingrediente.findByIdAndRemove(id, function(err) {
        if (err) {
            res.send(err);
            return;
        } 
        res.send("Ingrediente com o ID: " + id +" apagado com sucesso!");
    });
});

module.exports = router;