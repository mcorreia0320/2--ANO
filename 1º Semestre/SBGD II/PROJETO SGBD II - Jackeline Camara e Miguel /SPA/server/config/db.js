var mongoose = require('mongoose');
var connection = mongoose.connect('mongodb://localhost/Receitas', { useNewUrlParser: true });

module.exports = connection;