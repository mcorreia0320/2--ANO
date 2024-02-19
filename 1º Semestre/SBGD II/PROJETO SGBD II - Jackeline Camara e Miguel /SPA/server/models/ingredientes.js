var mongoose = require("mongoose"),
    Schema = mongoose.Schema,
    objectId = mongoose.Schema.ObjectId;

var ingredientesSchema = new Schema({
    _id: { type: Schema.Types.Mixed, auto: true },
    nome: { type: String, required: true },
    receita_id: [{ type: Schema.Types.Mixed, ref: 'Receita', required: true }],
}, {
    versionKey: false
});

var Ingrediente = mongoose.model('Ingrediente', ingredientesSchema, 'ingredientes');

module.exports = Ingrediente;