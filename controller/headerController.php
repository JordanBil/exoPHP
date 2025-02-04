<?php
function renderHeader(){
    $nav = '';
    if(isset($_SESSION['id'])){
        ob_start();
        echo '<a href="/coursPHP/monCompte">Mon Compte</a>
            <a href="/coursPHP/ajouterCategorie">Ajouter Catégorie</a>
            <a href="/coursPHP/deconnexion">Se Déconnecter</a>';
?>
        
<?php
        $nav = ob_get_clean();
    }
    
    include './vue/header.php';
}