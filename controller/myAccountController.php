<?php

function renderMyAccount(){
    //Vérifier si l'utilisateur est connecté
    if(!isset($_SESSION['id'])){
        //Non connecté : je redirige vers l'accueil
        header('location:/coursPHP/');
        exit;
    }
    include './vue/viewMyAccount.php';
}

?>