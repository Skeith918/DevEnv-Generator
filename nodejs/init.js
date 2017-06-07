var app = require('./app');
var debug = require('debug');
var http = require('http');
var server = http.createServer(app);
server.listen(3000);

server.on('listening', onListening);
function onListening() {
  var addr = server.address();
  var bind = typeof addr === 'string'
    ? 'pipe ' + addr
    : 'port ' + addr.port;
  debug('Listening on ' + bind);
}
