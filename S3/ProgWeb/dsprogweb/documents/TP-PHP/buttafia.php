<?php

Header("Content-type: image/png");

$valeurs = preg_split("/,/",$_SERVER['argv'][0]);
$titre = $valeurs[0];

$im = @ImageCreateFromPng ('buttvide.png');

$couleur = ImageColorAllocate($im,$valeurs[1],$valeurs[2],$valeurs[3]);

$hauteur = 9;

$px = (imagesx($im)-$hauteur*strlen($titre))/2;
$py = (imagesy($im)-2*$hauteur)/2;

ImageString($im,$hauteur,$px,$py,$titre,$couleur);
ImagePng ($im);
ImageDestroy ($im);

?>
