<?php

Header("Content-type: image/png");

$string = $_GET['string'];

$fonte  = 4;

$taille   = StrLen($string);
$largeur = 2.2*$fonte*$taille;
$hauteur  = 7*$fonte;

$posx = 3*$fonte;
$posy = 1.25*$fonte;

$img = imagecreate($largeur,$hauteur);

$couleurFond   = ImageColorAllocate($img,200,200,255);
$couleurTexte  = ImageColorAllocate($img,0,0,255);

ImageFilledRectangle($img,0,0,$largeur,$hauteur,$couleurTexte);
ImageFilledRectangle($img,2,2,$largeur,$hauteur,$couleurFond);

ImageString($img,$fonte,$posx,$posy,$string,$couleurTexte);
ImagePNG($img);

ImageDestroy($img);

?>
