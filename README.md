## Présentation de l'application

Ce projet est une application web Laravel.

Il permet de visualiser une liste de formations créés par des formateurs.

Les formateurs peuvent éditer et supprimer des formations, des chapitres de cours et leurs contenues.


## Installation

- Cloner le projet
- Lancer la commande : `composer install`
- Lancer la commande : `npm install`
- Créer un fichier .env à la racine du projet
- Copier le contenue du fichier .env.exemple et le coller dans votre nouveau fichier .env
- Modifier les champs suivant selon votre configuration en local :
<br>
`
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
`
<br>
Ma configuration sur MAC avec MAMPP était la suivant : 
<br>
`
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=laravel-formations-project
DB_USERNAME=root
DB_PASSWORD=root
 
<br>
- Lancer la commande : `php artisan migrate` ou `php artisan migrate:fresh` si ce message apparait : `Nothing to migrate.`
- Lancer la commande : `php artisan db:seed`

Votre base de donnée est à présent créée et peuplée.

- Pour lancer le server local : `php artisan serve` puis aller sur le site web via l'url indiqué.

A ce stade l'application n'a pas encore "d'application key", une fois sur l'URL du site en local (localhost:8000), Laravel vous propose de générer une "application key'. 

- Cliquez sur "generate application key"

**Vous voilà à présent sur le site** 

## Fonctionnalités manquantes

