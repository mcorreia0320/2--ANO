var mongoose = require("mongoose"),
    Schema = mongoose.Schema,
    objectId = mongoose.Schema.ObjectId;

var categoriasSchema = new Schema({
    _id: { type: objectId, auto: true },
    nome: { type: String, required: true }
}, {
    versionKey: false
});

var Categoria = mongoose.model('Categoria', categoriasSchema, 'categorias');

module.exports = Categoria;