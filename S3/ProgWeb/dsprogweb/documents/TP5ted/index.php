<?php
session_start();
include 'parametre.php';

// VERiFiER Si UNE SESSiON EXiSTE
if (isset($_SESSION['user'])) {
	header ('Location: accueil.php');
	exit();
}
//$valid_user="admin";
//$valid_password="admin";
	
$connexion=mysqli_connect($serveur, $login, $mdp) or die ("Connexion Impossible");
$bd="tp5";
mysqli_select_db($connexion, $bd);
$query='SELECT * from users';
$result=mysqli_query($connexion,$query);

// MESSAGE ANONYME
if (!isset($_GET['connexion']))
{
echo "<h1> Accueil Intranet Gestion Clientèle </h1>";
echo "<hr><br>";
echo " Seuls <b>les gestionnaires</b> peuvent accéder à la consultation des fiches clients.<br>";
echo'<br><a href=index.php?connexion=1>Se connecter</a>';
}
else {
// FORMULAiRE CONNEXiON
if (isset($_GET['ide']))
{
	if($_GET['ide']== 1) 
	{
		$value1="Erreur";
		$value2="";
	}
	if($_GET['ide']== 2) 
	{
		$value1="";
		$value2="Erreur";
	}
}
else	
{
	$value1="";
	$value2="";
}
echo "<form action='' method='post'>";
echo "Login : <input type='text' name ='user' value='$value1' /><br />";
echo "Mot de Passe : <input type='text' name ='password' value='$value2' /><br />";
echo "<input type='submit' name='ok' value='Connexion' /></form>";

// TRAiTEMENT
if(isset($_POST["user"]) && isset($_POST["password"]))
{
	$user=$_POST["user"];
	$password=$_POST["password"];
	while($ligne=mysqli_fetch_row($result))
	{
		if($user==$ligne[0] && $password==$ligne[1])
		{
			$_SESSION['user'] = $_POST['user'];
			if($_SESSION['user']=='admin') {
				header('Location: admin.php');
				exit;
			}
			else {
				header('Location: accueil.php');
				exit;
			}
		}
		else
		{
			if($user!=$ligne[0]){
				//Erreur Login;
				header('Location: index.php?ide=1&connexion=1');
			}
			if($password!=$ligne[1]){
				//Erreur MdP;
				header('Location: index.php?ide=2&connexion=1');	
			}	
		}
	}
}
}
?>