<?php

require('bibli.php');

EnteteTitrePage('Enregistrement d\'un film');

echo "<BR><BR><BR>\n";

echo "Merci de votre saisie !\n";

echo "<BR><BR><BR>\n";

echo "J'ai reçu les valeurs suivantes :<BR>\n";
echo "<UL>\n";
echo "<LI> le titre, c'est <EM>$titre</EM>\n";
echo "<LI> et il est sorti en <EM>$annee</EM>.\n";
echo "</UL>\n";

echo "<BR>\n";


$connexion = mysql_connect('sql.free.fr','fabien.torre','********');

if ($connexion) {

  echo "<B>Connexion au serveur effectuée !</B><BR>\n";


  if (mysql_select_db('fabien.torre',$connexion)) {

    echo "<B>Connexion à la base effectuée !</B><BR>\n";

    $requete = "INSERT INTO films VALUES ('','$titre',$annee,'')";

    $resultat = mysql_query($requete,$connexion);

    echo "<P>Je viens d'effectuer la requête suivante :<BR><BR>\n";

    echo "<CENTER>$requete</CENTER>\n";
    echo "<BR><BR>\n";





  } else {
    echo "<B>Echec à la connexion à la base...</B><BR>\n";
  }

  mysql_close($connexion);


} else {

  echo "<B>Echec à la connexion au serveur...</B><BR>\n";

}




PiedDePage();

?>
