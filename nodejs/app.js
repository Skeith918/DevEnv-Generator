const express = require('express');
const path = require('path');
const morgan = require('morgan');

const app = express();

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

app.use('/modules', express.static(__dirname + '/node_modules'));

app.use(require('./controllers'));

module.exports = app;
