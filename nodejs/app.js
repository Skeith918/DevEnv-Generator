const express = require('express');
const path = require('path');
const morgan = require('morgan');

const app = express();

<<<<<<< HEAD
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

app.use('/modules', express.static(__dirname + '/node_modules'));
=======
app.set('views', './views');
app.set('view engine', 'ejs');
>>>>>>> bbd575906da51409e105fe3c447ba5ae5ec31056

app.use(require('./controllers'));

module.exports = app;
