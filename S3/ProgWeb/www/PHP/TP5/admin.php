<?php

session_start();
if (isset($_SESSION['login']))
{
	echo "<h1 style='text-align: center'> Interface Administrateur </h1><hr>";
	
	include('fonctions.php');
	
	$client = "client";
	
	echo "<h2> Tableau des clients </h2><br>";
	$connexion = connexion();
	$requete = "SELECT * from ".$client;
	$resultat = mysqli_query($connexion, $requete);
	$result = mysqli_fetch_row($resultat);
	
	
	
	echo"<table border='1'>";
		echo"<tbody>";
		
		for($i=0;$i<count($result);$i=$i+4)
		{
			echo "<tr>";
			echo "<td>".$result[$i]."</td>";
			echo "<td>".$result[$i+1]."</td>";
			echo "<td>".$result[$i+2]."</td>";
			echo "<td>".$result[$i+3]."</td>";
			echo "</tr>";
		}
		
		echo"</tbody>";
		echo"</table>";
	
	// BON, À GÉRER : LES DÉLIRES DE MODIFIER / SUPPRIMER, et tout le reste.
	
	
	
	
	
	
	
}
else
{
	header('Location: home.php');
}
