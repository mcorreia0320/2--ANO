var mongoose = require("mongoose"),
    Schema = mongoose.Schema,
    objectId = mongoose.Schema.ObjectId;

var pasosSchema = new Schema({descricao: { type: String, required: true }});

var receitasSchema = new Schema({
    _id: { type: Schema.Types.Mixed, auto: true },
    titulo: { type: String, required: true },
    descricao: { type: String, required: true },
    tempoPreparacao: { type: Number, required: true },
    dificuldade: { type: String, required: true },
    imagem: { type: String, required: true },
    pasos: [pasosSchema],
    categoria_id: { type: Schema.Types.ObjectId, ref: 'Categoria', required: true },
    utilizador_id: { type: Schema.Types.ObjectId, ref: 'Utilizador', required: true },
    ingrediente_id: [{ type: Schema.Types.Mixed, ref: 'Ingrediente', required: true }],
    versionKey: false
});

var Receita = mongoose.model('Receita', receitasSchema, 'receitas');

module.exports = Receita;