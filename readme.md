#Hello
##Voici le site Sneaker Shop

Pour l'installer voici ce qu'il faut faire:
* Récupérer le code source avec git clone https://github.com/ThibaultRic/sneakerShop.git

* Importer le dump de la base de données sur votre base de données mySQL.
La base de données s'appelle 'sneakerShop' et se trouve dans /src/dumpDB/sneakerShop.sql

* Ouvrir le fichier dbConnect.php situé à la racine du site et ajouter le login et mot de passe vers votre serveur mySQL

* Et voilà le site est accessible sur votre localhost

Les informations techniques du site:
* Site responsive (desktop,mobile tablet)
* Le site est construit autour d'une arborescence simple, une homepage, une page produits et une page listant tous les produits
* Toutes les datas produits ainsi que le formulaire de contacts sont dynamisés grâce à la base de données
* Le fichier main.js comprend une fonction pour l'envoi des datas du form en ajax vers _getForm.php
* Le fichier product.js comprend notamment les fonctions utiles à la dynamisation du tableau des tailles ainsi que le bouton 'add to cart' 
* Les éléments réutilisables ( header, footer, grille de produits, formulaire, etc ) ont été séparés en 'module' afin de pouvoir les appeler facilement sur des pages du site grâce à un include php


Concernant les technos utilisées:
* Materialize.js pour le framework front end
* Jquery pour la lib js
* git évidemment
* owl carousel pour le slider de la page produit
* les icones sont fournis par Google (material icons). c'est une google font

Si vous avez des question, n'hésitez pas

