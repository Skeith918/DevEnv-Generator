from flask import Flask
from flask.ext.script import Manager

#declare le serveur flask
app = Flask(__name__)
#declare le plug-in flask-script
manager = Manager( app)

#cree la route web de la racine du site
#et la lie a la fonction hello
@app.route("/")
def hello():
    return "Hello World!"

if __name__ == "__main__":
   #lance le serveur Flask via le plug-in flask-script
   manager.run()