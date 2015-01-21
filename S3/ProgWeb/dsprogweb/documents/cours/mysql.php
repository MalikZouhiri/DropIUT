<?php

//connexion serveur mysql
$connexion = mysqli_connect($serveur,$login,$mdp);
or die ("message d'erreur";
echo ("réussi");

//nom de la base de données
$bd = "etudiant";

//connexion à la base de données
mysqli_select_db($connexion, $bd);
//or die...
// echo...

//ma table à consulter
$tables = "fi2a";

//requête de type "SELECT ... FROM..."
$requete = "SELECT * FROM $tables ORDER BY 'login'";

//requête passée par la commande mysqli_query
$resultat = mysqli_query($connexion, $requete);

//affichage du résultat, utilisation de la commande
while ($ligne = mysqli_fetch_row($resultat))
{
	echo "<pre>";
	print_r($ligne);
	echo "</pre>";
// echo ......
}

// Il existe aussi mysqli_fetch_array et mysqli_fetch_assoc, mais on s'en est pas servis

/***** AUTRE CODE, POUR L'INSERTION *****/

//requête préparée :
$reqinsert = "INSERT new fi2a(id,login)";
$reqinsert.=" VALUES (?,?)";
$reqprepare = mysqli_prepare($connexion,$requinsert);

//liste des paramètres
$toto="Dufaud";
$iden=4;
mysqli_stmt_bind_param($reqprepare,'ds',$iden,$toto);
	//d pour decimal, s pour string
mysqli_stmt_execute($reqprepare);
mysqli_close($connexion);