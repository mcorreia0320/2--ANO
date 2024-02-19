var mongoose = require('mongoose');
var connection = mongoose.connect('mongodb://localhost/universidade', { useNewUrlParser: true });

module.exports = connection;