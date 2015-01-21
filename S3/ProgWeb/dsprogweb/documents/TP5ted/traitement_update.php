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
if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['ville']))
{
   $id = $_POST['id'];
   $nom = $_POST['nom'];
   $mail = $_POST['mail'];
   $ville = $_POST['ville'];
   
   // QUERY PREPARE
   $query2="UPDATE clients SET nom=? ,mail=?,ville=? WHERE id=?";
   $query_prep=mysqli_prepare($connexion,$query2);
   mysqli_stmt_bind_param($query_prep, 'sssi',$nom,$mail,$ville,$id);
   mysqli_stmt_execute($query_prep);
   
   /*// QUERY SIMPLE   
   $query="UPDATE clients SET nom='$nom' ,mail='$mail',ville='$ville' WHERE id='$id'";
   $result=mysqli_query($connexion,$query) or die("Erreur dans la suppression");*/
 
}
header('location:admin.php');
exit();
?>