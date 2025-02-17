<?php

include "./maison.php";
include "./vehicule.php";



$villa = new Maison("zebi", 25,12,2) ;

echo $villa->calculerSuperficie();

$maVoiture = new Vehicule("Mercedes CLK", 4 , 250);

$maMoto = new Vehicule("Honda CBR", 2 , 280);

echo $maMoto->boost();

$vehiculeRapide = $maVoiture->plusRapide($maMoto, $maVoiture);

//echo plusRapide($maVoiture, $maMoto) ;



