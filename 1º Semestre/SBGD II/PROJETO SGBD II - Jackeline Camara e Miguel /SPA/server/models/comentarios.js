var mongoose = require("mongoose"),
    Schema = mongoose.Schema,
    objectId = mongoose.Schema.ObjectId;

var comentariosSchema = new Schema({
    _id: { type: Schema.Types.Mixed, auto: true },
    pontuacao: { type: Number, required: true },
    descricao: { type: String, required: true },
    utilizador_id: { type: Schema.Types.ObjectId, ref: 'Utilizador', required: true },
    receita_id: { type: Schema.Types.Mixed, ref: 'Receita', required: true },
}, {
    versionKey: false
});

var Comentario = mongoose.model('Comentario', comentariosSchema, 'comentarios');

module.exports = Comentario;