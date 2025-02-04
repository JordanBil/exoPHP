<?php

include 'model/category.php';


function ajouterCategory(PDO $bdd) {
     $message = "";
     if(isset($_POST["submit"])) {
        if(!empty($_POST["name"])) {
            $categorie = getCategoryByName($bdd,$_POST["name"]);
            if(!$categorie) {
                 addCategory($bdd, $_POST["name"]);
                $message = "la catégorie a été ajouté";
            }
            else {
                $message = "La catégorie existe déja en BDD";
            } 
        }
    }

}

function displayCategory(PDO $bdd){
    //Récupération de la liste des catégories
    $data = getAllCategory($bdd);

    $listCategory = "";
    foreach($data as $category){
        $listCategory = $listCategory."<li><h2>".$category['name'] ;
    }
    return $listCategory;
}

function renderCategory(PDO $bdd){
    $message = ajouterCategory($bdd);
    $listCategory = displayCategory($bdd);
    include "./vue/addCategory.php";
}