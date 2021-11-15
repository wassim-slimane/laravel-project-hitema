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

## Connexion

Pour se connecter sous un formateur : `email=user@user.com / mdp=user`
Pour se connecter sous l'admin : `email=admin@admin.com / mdp=admin`

## Difficultés rencontrées 

### Inscription

J'ai réussi à mettre en place le système de mailing pour l'inscription, malheureusement je n'ai pas réussi à aller au bout.
Je pensais que je pouvais mettre un formlaire dans le mail qui redirige vers une fonction et qui prend en paramètre les informations de l'utiliateur mais après tests ceci ne fonctionnait pas.
Ce qu'il aurait fallu faire je pense c'est de créer une table UserPending qui permet d'enregistrer tous les users qui souhaitent devenir des formateurs et faire un lien avec l'id de ce user pour ensuite pouvoir l'ajouter lorsque l'admin clique sur le bouton "Ajouter ce formateur".
J'aurais aussi pu enregistrer directement le user dans la BD et set son accountStatus à false, puis quand l'admin Ajoute le formateur alors l'accountStatus devient true.
La seconde méthode n'était pas autorisée par la consigne je n'ai pas eu le temps d'ajouter une autre table.

Finalement j'ai donc volontairement retiré le bouton "Inscription" et je n'ai pas transmis les informations de connexion au smtp.

### Utilisation du storage

En local j'ai réussi à créer un "répertoire lié" dans /Public pour récupérer les images enregistrées dans le storage, par contre lorsque j'ai retélécharger le projet le répertoire lié et les images n'existaient plus. j'ai compris que ce fonctionnement sert à ne pas récupérer les assets enregistrés par un user mais je n'ai pas réussi à trouver la solution afin d'avoir un répertoire liée donc finalement la modification d'une image ne fonctionne pas.

### Clé étrangère et table pivot 

J'ai rencontré de nombreux problèmes avec les tables qui contiennent des clés étrangère et la table pivot lors de l'ajout, la modification et la suppression d'objets de ces tables. Par exemple pour les formations je n'ai pas réussis à leur ajouter ou supprimer des chapitres.

### Organisation / Temps 

Je pense avoir eu une organisation qui ne correspondait pas à la durée de réalisation du projet.
Concrètement j'ai passé trop de temps sur la documentation et comprendre comment certaines choses fonctionne en Laravel alors que je n'en n'ai pas eu l'utilité lors de la réalisation du projet. Je voyais le projet long mais assez simple par rapport à ce qu'on a vu en cours et j'ai négligé les potentiels blocages sur certaines fonctionnalités qui ont augmenter mon temps de réalisation des tâches.

Au final je n'ai pas pu correctement gérer le cas administrateur et je n'ai pas eu le temps de faire les fonctionnalités pour éditer les chapitres et les contenus.


