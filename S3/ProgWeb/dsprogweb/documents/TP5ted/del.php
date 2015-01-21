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
if(isset($_GET['id']) && $_GET['id']!='')
{
   $id = $_GET['id'];
   $query ='DELETE FROM clients WHERE id ='.$id;
   $result=mysqli_query($connexion,$query) or die("Erreur dans la suppression");
 
}
header('location:admin.php');
exit();
?>