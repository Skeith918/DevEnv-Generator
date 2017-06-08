# DevEnv-Generator-Website
## À propos de DevEnv-Generator-Website
Ceci est l'interface web de l'application DevEnv-Generator fonctionnant en HTML5 et PHP,
Il permet, en s'authentifiant sur un serveur LDAP de pouvoir gérer / créer / détruire ses containers personnalisés (ou DevEnv)
déployé automatiquement avec [DevEnv-Generator-App](https://github.com/Skeith918/DevEnv-Generator-App).

## Installation
#### Linux
- Installez Nginx, PHP5 and PHP5-FPM
```
sudo apt install -y nginx php5 php5-fpm
```
- Editez ou créez un fichier dans le répertoire /etc/nginx/sites-availabe/ et mettez le code ci-dessous :
```
server {
        listen 80 default_server;
        server_name devenvgen.domain.tld;

        root /path/to/DevEnv-Generator-Website;
        index index.php;

        location ~ \.php$ {
                try_files $uri =404;
                fastcgi_split_path_info ^(.+\.php)(/.+)$;
                fastcgi_pass unix:/var/run/php5-fpm.sock;
                fastcgi_index index.php;
                fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
                include fastcgi_params;
        }
}

```
#### Windows
- Installez votre environnement de développement web préféré (WAMP, XAMP, etc...)
- Clonez le projet dans votre webroot (ex: C:\wamp\www)

## Deployment in production
Pour notre projet, nous avons choisi d'installer cet environnement sur une machine virtuelle Debian8.6 héberger sur un ESXi.
