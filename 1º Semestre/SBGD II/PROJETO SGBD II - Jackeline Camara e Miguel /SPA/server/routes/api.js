var express = require('express'),
    router = express.Router();

//Rota para a API de utilizadores
router.use("/utilizadores", require("../controllers/utilizadoresController"));

//Rota para a API de categorias
router.use("/categorias", require("../controllers/categoriasController"));

//Rota para a API de comentarios
router.use("/comentarios", require("../controllers/comentariosController"));

//Rota para a API de ingredientes
router.use("/ingredientes", require("../controllers/ingredientesController"));

//Rota para a API de receitas
router.use("/receitas", require("../controllers/receitasController"));

//Rota para a API da SPA
router.use("/spa", require("../controllers/spaController"));





module.exports = router;