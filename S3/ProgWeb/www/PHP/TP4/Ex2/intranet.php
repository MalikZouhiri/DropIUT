<?php

session_start();
	
if (isset($_SESSION['login']))
{
	echo "Vous êtes authentifié comme ".$_SESSION['login']." génial.";
	echo "<form action='action2.php' method='post'>";
	echo "<input type='submit' name ='deco' value = 'Déconnexion'></form>";
}

else
{
	header('Location: index.php');
}



?>