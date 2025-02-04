<?php
function renderHeader(){
    $nav = '';
    if(isset($_SESSION['id'])){
       $nav='<a href="/coursPHP/monCompte">Mon Compte</a>
            <a href="/coursPHP/deconnexion">Se Déconnecter</a>';
    }
    include './vue/header.php';
}