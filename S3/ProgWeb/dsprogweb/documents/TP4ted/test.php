<?php
echo "<form action='' method='get'>";
echo "nom : <input type='text' name ='nom' /><br />";
echo "<input type='submit' name='ok' /></form>";
//$nom=$_GET["nom"];
//$ok=
if(isset($_GET["nom"]))
	$nom=$_GET['nom'];
	echo ("affichage de GET : ".$nom." <br />");
if(isset($_POST["nom"]))
	echo("affichage de POST : ".$_POST["nom"]." <br />");
	echo "<hr /> <h3> Detail de la methode GET :</h3>";
	print_r($_GET);
	echo "<hr /> <h3> Detail de la methode POST :</h3>";
	print_r($_POST);
	echo "<hr/>";
	
	foreach ($_GET as $cle => $valeur)
		{
			$$cle=$valeur;
		}
echo($nom." et ".$ok);
echo "<br />1 :".htmlspecialchars($nom);
echo "<br />2 :".htmlspecialchars(stripslashes($nom));
echo "<br />3 :".htmlentities($nom);
echo "<br />4 :".htmlspecialchars($nom,ENT_QUOTES,"ISO-8859-1");


?>