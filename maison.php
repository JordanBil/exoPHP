<?php
class Maison{
    //Attribut
    private ?string $nom;
    private ?int $longueur;
    private ?int $largueur;
    private ?int $nbrEtage;
  

    //Constructeur
    //De base, PHP possède déjà une méthode magique qui s'appelle __construc(), et servant à instancier des objets sans donner de valeur à leur attribut
    //Je peux cependant redéfinir le comportement du constructeur au sein d'un classe
    public function __construct(?string $nom, ?int $longueur, ?int $largeur, ?int $nbrEtage){
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->nbrEtage = $nbrEtage;
    }

    //GETTER ET SETTER
    public function getNom():?string{
        return $this->nom;
    }

    public function getLongueur():?int{
        return $this->longueur;
    }

    public function getLargueur():?int{
        return $this->largueur;
    }
    public function getNbrEtage():?int{
        return $this->nbrEtage;
    }

    public function setNom(?string $newNom):Maison{
        $this->nom = $newNom;
        return $this;
    }

    public function setLongueur(?int $newLongueur):Maison{
        $this->longueur = $newLongueur;
        return $this;
    }
    public function setLargeur(?int $newLargeur):Maison{
        $this->largeur = $newLargeur;
        return $this;
    }
    public function setNbrEtage(?int $nbrEtage):Maison{
        $this->nbrEtage = $nbrEtage;
        return $this;
    }

    public function calculerSuperficie():void{
       $superficie = $this->longueur * $this->largeur * $this->nbrEtage;
        echo 'La superficie est de  '.$superficie.' m² !';
    }
}  

