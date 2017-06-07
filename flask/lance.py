import os
import docker
from flask import Flask, flash, redirect, render_template, request, session, abort, url_for
from flask_ldap import LDAP
from flask_pymongo import PyMongo
app = Flask(__name__)

#LDAP AUTHENTICATION
app.config['LDAP_HOST'] = 'ldap.example.com'
app.config['LDAP_DOMAIN'] = 'example.com'
app.config['LDAP_SEARCH_BASE'] = 'OU=Domain Users,DC=example,DC=com'
app.config['LDAP_AUTH_TEMPLATE'] = 'login.html'
app.config['LDAP_AUTH_VIEW'] = 'login'
#app.config['MONGO_DBNAME'] = 'simpledb'
#mongo = PyMongo(app, config_prefix='MONGO')

ldap = LDAP(app)
app.secret_key = "welfhwdlhwdlfhwelfhwlehfwlehfelwehflwefwlehflwefhlwefhlewjfhwelfjhweflhweflhwel"
app.add_url_rule('/login', 'login', ldap.login, methods=['GET', 'POST'])

client =  docker.from_env(assert_hostname=False) \
    if os.getenv('DOCKER_HOST') \
    else docker.Client(base_url='unix://var/run/docker.sock')

@app.route('/')
@ldap.login_required
def home():
    pass
    return devenv()



@app.route('/login', methods=['GET', 'POST'])
def login():
    return render_template('login.html')
    if request.form.get['login-pass'] == '123' and request.form.get['login-name'] == 'admin':
        return True
    else:
        return False
    return home()

@app.route('/vos-devenv')
def devenv():
        return render_template('index.html')

@app.route('/creer-devenv')
def add():
        cmd = ["../../DevEnv-Generator-App/mongo-inject", "request", "", "", ""]

if __name__ == "__main__":
    app.run(debug=True,host='0.0.0.0', port=4000)
