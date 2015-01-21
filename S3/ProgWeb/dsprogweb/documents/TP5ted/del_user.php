<?php
session_start();
if (!isset($_SESSION['user'])) {
	header ('Location: index.php');
	exit();
}
else {
	if($_SESSION['user'] != 'admin')
	{
		header ('Location: accueil.php');
		exit();
	}
}
// connection a la BD
include 'parametre.php';
$connexion=mysqli_connect($serveur, $login, $mdp) or die ("Connexion Impossible");
$bd="tp5";
mysqli_select_db($connexion, $bd) or die ("Erreur choix de la bd");
// si id a ete poste :
if(isset($_GET['login']) && $_GET['login']!='')
{
   $login = $_GET['login'];
   $query='DELETE FROM users WHERE login =?';
   $query_prep=mysqli_prepare($connexion,$query);
   mysqli_stmt_bind_param($query_prep, 's',$login);
   mysqli_stmt_execute($query_prep); 
}
header('location:admin.php');
exit();
?>