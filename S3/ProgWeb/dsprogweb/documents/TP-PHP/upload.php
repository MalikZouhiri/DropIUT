<?php
die(); // pour ne pas jouer avec ce script...
echo "<ul>\n";
echo "<li> l'emplacement temporaire du fichier : ",$_FILES['photo']['tmp_name'],"</li>";
echo "<li> le nom initial du fichier : ",$_FILES['photo']['name'],"</li>";
echo "<li> la taille du fichier (octets) : ",$_FILES['photo']['size'],"</li>";
echo "<li> le type MIME du fichier : ",$_FILES['photo']['type'],"</li>";
echo "<li> le code retour de l'upload : ",$_FILES['photo']['error'],"</li>";
echo "</ul>\n";

echo "<p>Le chemin jusqu'&agrave; chez moi : ",$_SERVER["DOCUMENT_ROOT"],".</p>\n";

if (is_uploaded_file($_FILES['photo']['tmp_name'])) {

  $new         = 'Tests/toto';
  $origine     = $_FILES['photo']['tmp_name'];
  $destination = $_SERVER["DOCUMENT_ROOT"].'/'.$new;

  move_uploaded_file($origine,$destination);

  echo "<p>D&eacute;placement de <tt>$origine</tt> vers <a href=\"http://fabien.torre.free.fr/$new\"><tt>$destination</tt></a>.</p>\n";

} else {

  echo "<p>&Eacute;chec du transfert (fichier trop gros ?).</p>\n";

}


?>


