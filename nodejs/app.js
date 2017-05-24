const express = require('express');
const router = express.Router();
const morgan = require('morgan');
const app = express();

app.set('views', './views');
app.set('view engine', 'ejs');

router.get('/', function(req, res) {
  res.render('index');
  red.end();
});

module.exports = router;
