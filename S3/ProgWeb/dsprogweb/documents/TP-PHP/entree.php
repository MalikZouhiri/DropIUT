<?php

require('bibli.php');

EnteteTitrePage('Enregistrement d\'un film');

$titre = $_POST['titre'];
$annee = $_POST['annee'];

echo "Merci de votre saisie !\n";

echo "<BR><BR><BR>\n";

echo "J'ai reçu les valeurs suivantes :<BR>\n";
echo "<UL>\n";
echo "<LI> le titre, c'est <EM>$titre</EM>\n";
echo "<LI> et il est sorti en <EM>$annee</EM>.\n";
echo "</UL>\n";

echo "<BR>\n";

$requete = "INSERT INTO films VALUES ('','$titre',$annee,'')";

echo "Quand je serai plus grand, je dirai ça à la base de donnée :<BR><BR>\n";

echo "<CENTER>$requete</CENTER>\n";
echo "<BR><BR>\n";

PiedDePage();

?>
