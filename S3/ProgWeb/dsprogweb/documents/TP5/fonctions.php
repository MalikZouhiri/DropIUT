<?php

function connexion()
{
	$login = "root";
	$mdp = "";
	$connexion = mysqli_connect("localhost", $login, $mdp)
	or die ("Erreur ma poule");
	echo "Connexion à la base de données réussie.";
	$bd = "entreprise";
	mysqli_select_db($connexion, $bd);
	return $connexion;
}


?>