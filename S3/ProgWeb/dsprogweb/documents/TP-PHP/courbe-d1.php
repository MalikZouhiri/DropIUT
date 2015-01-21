<?php


// Récupération des valeurs à tracer

$valeurs = preg_split("/;/",$_SERVER['argv'][0]);



// Constantes

$margegauche =  55;
$margedroite =  20;
$margehaute  =  20;
$margebas    =  60;
$largeur     = 400;
$hauteur     = 200;

$nb_participants =  18;
$score_minimal   =   0;
$score_maximal   = 100;


$min = $score_minimal;
$max = $score_maximal;

$deltay = $hauteur/($max-$min);
$deltax = $largeur/$nb_participants;





// Création de l'image

Header("Content-type: image/png");

$im = @ImageCreate ($largeur+$margegauche+$margedroite,
		    $hauteur+$margebas+$margehaute);


$background_color = ImageColorAllocate ($im,255,255,255);
$text_color       = ImageColorAllocate ($im,0,0,0);
$trait_color      = ImageColorAllocate ($im,0,0,255);


// Dessin des axes

ImageLine($im,$margegauche,$margehaute,$margegauche,
	  $hauteur+$margehaute,$text_color);

ImageLine($im,$margegauche,$hauteur+$margehaute,
	  $margegauche+$largeur,$hauteur+$margehaute,$text_color);









// Graduation sur l'axe des x

$nbpts=$nb_participants;
for ($i=1;$i<=$nbpts;$i++) {
  ImageString ($im, 2, floor($margegauche+$i*$largeur/$nbpts-10),
	       $hauteur+$margehaute+10, "$i", $text_color);
}

ImageString ($im,3,floor($largeur/2),
	     $hauteur+$margehaute+floor($margebas/2),
	     "Place finale", $text_color);


// Graduation sur l'axe des y

$nbpts=10;
for ($i=0;$i<=$nbpts;$i++) {
  $n=floor($min+($max-$min)/$nbpts*$i);
  ImageString ($im, 2,$margegauche-20,
	       floor($hauteur-8-$i*$hauteur/$nbpts)+$margehaute,
	       "$n", $text_color);
}

ImageStringUp ($im,3,floor($margegauche/2)-20,$margebas+floor($hauteur/2),
	       "Probabilite", $text_color);



// Tracé de la courbe

$valp = 0;

for ($i=1;$i<=$nb_participants; $i++) {

  $vali = $valeurs[$i-1];

  $y = $hauteur - floor($min+$vali*$deltay) + $margehaute;
  $x = $margegauche + floor($i*$deltax) - 8;

  if ($vali != 0) {

    ImageFilledRectangle($im,$x-1,$y-1,$x+1,$y+1,$trait_color);

    if ($valp != 0) {
      ImageLine ($im,$xp,$yp,$x,$y,$trait_color);
    }

  }

  $valp = $vali;
  $xp   = $x;
  $yp   = $y;

}



// Génération de l'image et fin

ImagePng($im);
ImageDestroy($im);

?>


