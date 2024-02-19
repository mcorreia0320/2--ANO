var mongoose = require("mongoose"),
    Schema = mongoose.Schema,
    objectId = mongoose.Schema.ObjectId;

var utilizadoresSchema = new Schema({
    _id: { type: objectId, auto: true },
    username: { type: String, required: true },
    email: { type: String, required: true },
    password: { type: String, required: true },
    favoritos: [{ type: Schema.Types.Mixed, ref: 'Receita', required: true }],   //para reconocer cualquier tipo de dato y que encontrara tanto objectId como ids enteros
}, {
    versionKey: false
});

var Utilizador = mongoose.model('Utilizador', utilizadoresSchema, 'utilizadores');

module.exports = Utilizador;