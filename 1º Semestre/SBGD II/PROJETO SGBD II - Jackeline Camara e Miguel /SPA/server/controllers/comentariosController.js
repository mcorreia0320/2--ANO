const Comentario = require("../models/comentarios.js");

const mongoose = require("mongoose");

var express = require("express"),
    router = express.Router();


// OBTER TODOS OS COMENTARIOS
router.get("/", function(req, res) {
    Comentario.find({}, function(err, data) {
        if (err) {
            res.send(err);
            return;
        }
        res.send(data);
    });
});

// OBTER UM COMENTARIO POR ID
router.get("/:id", function(req, res) {
    var id = req.params.id;

    // Verifico se o ID é um ObjectId ou um inteiro
    if (id.length  < 24) {
        id = parseInt(id);
    } else id = mongoose.Types.ObjectId(id);


    Comentario.find({ _id: id }, function(err, data) {
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

// CRIAR UM COMENTARIO
router.post("/", function(req, res) {
    var {pontuacao, descricao, utilizador_id, receita_id} = req.body;
    
    // Converto a string do ID do utilizador para um ObjectId
    utilizador_id = mongoose.Types.ObjectId(utilizador_id);

    // Em caso de ser uma string converto o ID da receita para um ObjectId 
    if (typeof receita_id === 'string'){
        receita_id = mongoose.Types.ObjectId(receita_id);
    }

    var model = new Comentario({
        _id: new mongoose.Types.ObjectId(),
        pontuacao: pontuacao,
        descricao: descricao,
        utilizador_id: utilizador_id,
        receita_id: receita_id
    });
    model.save(function(err) {
        if (err) {
            res.send(err);
            return;
        }
        res.send("Comentario criado com uma pontuacao de: " + pontuacao);
    });
});

// ATUALIZAR UM COMENTARIO
router.put("/:id", function(req, res) {
    var id = req.params.id;
    var {pontuacao, descricao, utilizador_id, receita_id} = req.body;

    // Verifico se o ID é um ObjectId ou um inteiro
    if (id.length  < 24) {
        id = parseInt(id);
    } else id = mongoose.Types.ObjectId(id);

    // Converto a string do ID do utilizador para um ObjectId
    utilizador_id = mongoose.Types.ObjectId(utilizador_id);

    // Em caso de ser uma string converto o ID da receita para um ObjectId 
    if (typeof receita_id === 'string'){
        receita_id = mongoose.Types.ObjectId(receita_id);
    }

    Comentario.findByIdAndUpdate(id, { pontuacao: pontuacao, descricao: descricao, utilizador_id: utilizador_id, receita_id: receita_id},
        function(err) {
            if (err) {
                res.send(err);
                return;
            }
            res.send("Comentario com o ID: " + id +" atualizado com sucesso!");
        });
});

// APAGAR UM COMENTARIO por ID
router.delete("/:id", function(req, res) {
    var id = req.params.id;

    // Verifico se o ID é um ObjectId ou um inteiro
    if (id.length  < 24) {
        id = parseInt(id);
    } else id = mongoose.Types.ObjectId(id);


    Comentario.findByIdAndRemove(id, function(err) {
        if (err) {
            res.send(err);
            return;
        }
        res.send("Comentario com o ID: " + id +" apagado com sucesso!");
    });
});

module.exports = router;