<?php
session_start();

// VERiFiER Si UNE SESSiON EXiSTE
if (isset($_SESSION['user'])) {
	header ('Location: accueil.php');
	exit();
}

$valid_user="admin";
$valid_password="admin";
// FORMULAiRE CONNEXiON
echo "<form action='' method='post'>";
echo "Login : <input type='text' name ='user' /><br />";
echo "Mot de Passe : <input type='password' name ='password' /><br />";
echo "<input type='submit' name='ok' /></form>";

// TRAiTEMENT
if(isset($_POST["user"]) && isset($_POST["password"]))
{
	$user=$_POST["user"];
	$password=$_POST["password"];
	if($user==$valid_user && $password==$valid_password)
	{
		$_SESSION['user'] = $_POST['user'];
		header('Location: accueil.php');
		exit;

	}
	else
	{
		echo "Erreur dans votre login ou mot de passe. <br>";
	}
}

?>