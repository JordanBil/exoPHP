<?php
//Activer la session
session_start();

//import des ressources
include './env.php';
include './utils/connexion.php';
include './utils/utils.php';
include 'controller/headerController.php';


//Récupérer le path entrer par l'utilisateur
$url = parse_url($_SERVER['REQUEST_URI']);

//Test le path pour savoir in on a une route, sinon on retourne l'élément racine /
$path = isset($url['path']) ? $url['path'] : '/';

renderHeader();

//Mise en place du Routeur et des routes

switch($path){
    //Route pour l'accueil
    case '/coursPHP/' :

        include 'controller/accountController.php';
        $bdd = connexion();
        renderAccounts($bdd);
        break;
    
    //Route pour pour la page mon compte
    case '/coursPHP/monCompte' :
       
        include 'controller/myAccountController.php';    
        renderMyAccount();
        break;

    //Route pour pour la page ajouter catégorie
    case '/coursPHP/ajouterCategorie' :
       
        include 'controller/categorieController.php'; 
        $bdd = connexion();   
        renderCategory($bdd);
        break;

    //Route pour se deconnecter
    case '/coursPHP/deconnexion' :
        include 'controller/deconnexionController.php';
        break;
    //Si aucune route ne correspond : Page d'Erreur 404
    default :
        include './controller/errorController.php';
        render404();
}

include './vue/footer.php';

