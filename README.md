## Présentation de l'application

Ce projet est une application web Laravel.

Il permet de visualiser une liste de formations créés par des formateurs.

Les formateurs peuvent éditer et supprimer des formations, des chapitres de cours et leurs contenues.

## Modèle relationnel de la base de donnée

<img width="883" alt="image" src="https://user-images.githubusercontent.com/59143138/141752533-3e26bdc4-cd8e-469d-926d-9ac677d4c758.png">


## Installation

- Cloner le projet
- Lancer la commande : `composer install`
- Lancer la commande : `npm install`
- Créer un fichier .env à la racine du projet
- Copier le contenue du fichier .env.exemple et le coller dans votre nouveau fichier .env
- Modifier les champs suivant selon votre configuration en local :
<br>
<code>
DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1 <br>
DB_PORT=3306 <br>
DB_DATABASE=laravel <br>
DB_USERNAME=root <br>
DB_PASSWORD= <br>
</code>
<br>
Ma configuration sur MAC avec MAMPP était la suivant : 
<br>
<code>
    DB_CONNECTION=mysql <br>
    DB_HOST=127.0.0.1 <br>
    DB_PORT=8889 <br>
    DB_DATABASE=laravel-formations-project <br>
    DB_USERNAME=root <br>
    DB_PASSWORD=root <br>
</code>
<br>
- Lancer la commande : ` php artisan migrate ` ou `php artisan migrate:fresh` si ce message apparait : ` Nothing to migrate. `
- Lancer la commande : ` php artisan db:seed `

Votre base de donnée est à présent créée et peuplée.

- Pour lancer le server local : ` php artisan serve ` puis aller sur le site web via l'url indiqué.

A ce stade l'application n'a pas encore "d'application key", une fois sur l'URL du site en local (localhost:8000), Laravel vous propose de générer une "application key'. 

- Cliquez sur "generate application key" et rechargez la page

**Vous voilà à présent sur le site** 

## Difficultés rencontrées 

### Utilisation du storage :

En local j'ai réussi à créer un "répertoire lié" dans /Public pour récupérer les images enregistrées dans le storage, par contre lorsque j'ai retélécharger le projet le répertoire lié et les images n'existaient plus. j'ai compris que ce fonctionnement sert à ne pas récupérer les assets enregistrés par un user mais je n'ai pas réussi à trouver la solution afin d'avoir un répertoire liée donc finalement la modification d'une image ne fonctionne pas.



