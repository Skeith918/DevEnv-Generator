var express      = require('express'),
    passport     = require('passport'),
    bodyParser   = require('body-parser'),
    LdapStrategy = require('passport-ldapauth');

var SRV = {
  server: {
    url: 'ldap://localhost:389',
    bindDn: 'cn=root',
    bindCredentials: 'secret',
    searchBase: 'ou=passport-ldapauth',
    searchFilter: '(sAMAccountName={{username}})'
  }
};

var app = express();

var session = require('express-session');
app.use(session({
  secret: 'secret',
  resave: false,
  saveUninitialized: true,
  cookie : { httpOnly: true, maxAge: 2419200000 }
}));

passport.use(new LdapStrategy(SRV));


app.use(passport.initialize());
app.use(passport.session());

passport.serializeUser(function(user, done) {
  done(null, user);
});

passport.deserializeUser(function(user, done) {
  done(null, user);
});

app.post('/login', passport.authenticate('ldapauth', {
  successRedirect: '/container', failureRedirect: '/login'
}));

app.listen(3000);

server.on('listening', onListening);
function onListening() {
  var addr = server.address();
  var bind = typeof addr === 'string'
    ? 'pipe ' + addr
    : 'port ' + addr.port;
  debug('Listening on ' + bind);
}
