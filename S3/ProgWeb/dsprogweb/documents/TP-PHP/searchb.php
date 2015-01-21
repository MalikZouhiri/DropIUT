<?php

require('bibli.php');

EnteteTitrePage('Recherche d\'un film');

echo "<BR><BR><BR>\n";

echo "Vous recherchez un film dont le titre contient le mot <EM>$motdutitre</EM>.\n";

echo "<BR><BR>\n";


$connexion = mysql_connect('sql.free.fr','fabien.torre','********');

if ($connexion) {

  echo "<B>Connexion au serveur effectuée !</B><BR>\n";


  if (mysql_select_db('fabien.torre',$connexion)) {

    echo "<B>Connexion à la base effectuée !</B><BR>\n";

    $requete = "SELECT * FROM films WHERE titre LIKE '%$motdutitre%'";

    $resultat = mysql_query($requete,$connexion);

    echo "<P>Je viens d'effectuer la requête suivante :<BR><BR>\n";

    echo "<CENTER>$requete</CENTER>\n";
    echo "<BR><BR>\n";

    echo "<P>Les réponses sont :<BR><BR>\n";

    echo "<UL>\n";

    while ($film = mysql_fetch_array($resultat)) {

      echo '<LI><B>';
      echo $film['titre'];
      echo "</B>\n";
      echo $film['annee'];
      echo "<BR>\n";

    }

    echo "</UL>\n";



  } else {
    echo "<B>Echec à la connexion à la base...</B><BR>\n";
  }

  mysql_close($connexion);


} else {

  echo "<B>Echec à la connexion au serveur...</B><BR>\n";

}




PiedDePage();

?>
