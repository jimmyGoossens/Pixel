# Pixel
a project to improve our skills in programming

# Récapitulatif des différentes fonctionnalités :
--------
## Créer un compte utilisateur:
### inscription & envoi vers DataBase :
* l'objectif à été atteint.
* renvoi direct vers page login.
* Technique : utilisation du modèle POO (class_PDO/fct insert ).
* struture MVC.

## Se connecter
### connection & verification info dans DataBase :

* l'objectif a éte atteint.
* connection fluide (class_PDO/fct select).
* (securité JS et php -> voir caroline).
* les verifications JS sont effective mais aucune verifications php
* renvoi vers la page home fonctionnel.
### Problème rencontré :
* coherence entre les formulaires et le code php en back-end qui traite le formulaire ( réalisé par 2 pers. !=).

## Uploader une image
### téléchargement & envoi vers DataBase :

* l'objectif a été atteint.
* les images sont envoyés sur un fichier tampons puis  l'url vers la DB avec un newID random en cas de nom identique pour l'image. (class_PDO/fct insert).
* les extentions pour les images à uploader sont également limités. la verification se passe sans souci.
* le renvoi direct vers la page home et affichage de l'image est fonctionnel.
### Problème rencontré :
* Avec le design au niveau de l'affichage des images. Difficultés au niveau du CSS -> voir Mutwakil (CSS defectueux).

## Page Admin :

* l'objectif n'a pas été atteint.
* manque une partie du code, developpé par un autre membre du groupe. il aurait fallu reprendre à zero
* souci de delai.

## Site Responsive :

* objectif n' a pas été atteint .

## Progressiv App.:

* objectif non atteint .

--------

# Structure MVC :

## Pages (Views) à afficher :
 * gérer par le router et le controller liés aux Views.
 * appel à la DB si nécessaire au travers du Model.
 * souci avec les Assets, specifiquement le css.
 * probleme au niveau de l'include ou du head.html  

### Problème rencontré :

Coherence back-end et front-end, schema et processus d'utilisation de l'appli pas assez clarifié
besoin d'un fils rouge global de l'expérience client ( comment l'utilisateur va se déplacer au travers de l'application).
UML pas assez poussée, on aurait pu faire mieux et beaucoup plus détaillé.

il a fallu ajouté ou modifier les link entre chaque page, créer des retour automatique vers les pages principales en fonction de la qualité de l'utilisateur (connecté ou pas connecté, aprés un download etc...).
