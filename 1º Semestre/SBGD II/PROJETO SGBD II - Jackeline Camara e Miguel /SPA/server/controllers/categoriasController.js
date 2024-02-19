const Categoria = require("../models/categorias.js");

var express = require("express"),
    router = express.Router();


// OBTER TODAS AS CATEGORIAS
router.get("/", function(req, res) {
    Categoria.find({}, function(err, data) {
        if (err) {
            res.send(err);
            return;
        }
        res.send(data);
    });
});

// OBTER UMA CATEGORIA POR ID
router.get("/:id", function(req, res) {
    var id = req.params.id;
    Categoria.find({ _id: id }, function(err, data) {
        if (err) {
            res.send(err);
            return;
        } else if (data.length == 0) {
            res.send("Não existe nenhuma categoria com o ID: " + id);
            return;
        }
        res.send(data[0]);
    });
});

// CRIAR UMA CATEGORIA
router.post("/", function(req, res) {
    var obj = req.body;
    var model = new Categoria(obj);
    model.save(function(err) {
        if (err) {
            res.send(err);
            return;
        }
        res.send("Categoria criada com o nome: " + obj.nome);
    });
});

// ATUALIZAR UMA CATEGORIA
router.put("/:id", function(req, res) {
    var id = req.params.id;
    var obj = req.body;

    Categoria.findByIdAndUpdate(id, { nome: obj.nome},
        function(err) {
            if (err) {
                res.send(err);
                return;
            }
            res.send("Categoria com o ID: " + id +" atualizada com sucesso!");
        });
});

// APAGAR UMA CATEGORIA por ID
router.delete("/:id", function(req, res) {
    var id = req.params.id;
    Categoria.findByIdAndRemove(id, function(err) {
        if (err) {
            res.send(err);
            return;
        }
        res.send("Categoria com o ID: " + id +" apagada com sucesso!");
    });
});

module.exports = router;