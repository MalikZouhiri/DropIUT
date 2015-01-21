<?php
echo "<h1>Connexion</h1>";
echo "<hr/>";

echo "<form action ='' method ='post'>";
echo "Login : <input type ='text' name='login' /><br>";
echo "Password : <input type='password' name='pwd'/><br>";
echo "<input type='submit' name='ok' /></form>";

include ('fonctions.php');


$table = "utilisateur";

if ((isset($_POST['login'])) and (isset($_POST['pwd'])) and (isset($_POST['ok'])))
{
	if (!empty($_POST['login']) and !empty($_POST['pwd']))
	{
		$connexion = connexion();
		$requete = "SELECT estAdmin from ".$table." where login = '".$_POST['login']."' and password = '".$_POST['pwd']."'";
		$resultat = mysqli_query($connexion, $requete);
		$result = mysqli_fetch_row($resultat);
		if (mysqli_num_rows($resultat) == 1)
		{
			echo $result[0];
			echo "<hr/>";
			print_r($result);
			if ($result[0] == 0)
			{
				
				session_start();
				$_SESSION['login'] = $_POST['login'];
				header('Location: utilisateur.php');
			}
			if ($result[0] == 1)
			{
				session_start();
				$_SESSION['login'] = $_POST['login'];
				header('Location: admin.php');
			}
		
		}
		else
		{
			echo "pas bien";
		}
	}
}

?>