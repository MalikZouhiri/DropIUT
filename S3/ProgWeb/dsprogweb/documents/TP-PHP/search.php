<?php

require('bibli.php');

EnteteTitrePage('Recherche d\'un film');

$motdutitre = $_POST['motdutitre'];

echo "<BR><BR><BR>\n";

echo "Vous recherchez un film dont le titre contient le mot <EM>$motdutitre</EM>.\n";

echo "<BR><BR>\n";

$requete = "SELECT * FROM films WHERE titre LIKE '%$motdutitre%'";

echo "Quand je serai plus grand, je demanderai ça à la base de donnée :<BR><BR>\n";

echo "<CENTER>$requete</CENTER>\n";
echo "<BR><BR>\n";

PiedDePage();

?>
