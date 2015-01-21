<?php
session_start();
include 'parametre.php';

// CSS
	echo '<style type="text/css">';
		echo 'table {';
		echo 'border: medium solid #000000;';
		echo '}';
		echo 'td, th {';
		echo 'border: thin solid #6495ed;';
		echo '}';
	echo '</style>';
// Fin CSS
	
$connexion=mysqli_connect($serveur, $login, $mdp) or die ("Connexion Impossible");
$bd="tp5";
mysqli_select_db($connexion, $bd);
$query='SELECT * from clients';
$query2='SELECT COUNT(*) FROM client';
$result=mysqli_query($connexion,$query);
$client_size=mysqli_query($connexion,$query2);


// VERiFiER Si UNE CONNEXiON A ETE FAITE
if (!isset($_SESSION['user'])) {
	header ('Location: index.php');
	exit();
}

else {
	echo "<br />";
	echo "<h1> Accueil </h1>";

	echo "<hr>";
	echo "Connecte ! <br>";
	echo "Bienvenue ", $_SESSION["user"];
	echo "<br>";
	
echo '<table>';
	echo '<TR>';
		echo '<td>';
		echo "<b>Entreprise</b>";
		echo '</td>';
		echo '<td>';
		echo "<b>Mail</b>";
		echo '</td>';
		echo '<td>';
		echo "<b>Date</b>";
		echo '</td>';
		echo '<td>';
		echo "<b>Ville</b>";
		echo '</td>';
		echo '</TR>';		
while($ligne=mysqli_fetch_row($result))
			{
				$nom=$ligne[1];
				for($i=1;$i<5;$i++)
				{
					if($i==1) echo '<TR>';
						echo '<td>';
						echo $ligne[$i];
						echo '</td>';
				}
				if($i==4) echo '</TR>';
					
			}
	echo '</table> <br/>';
		
	// DECONNEXiON
	echo "<form action='' method='get'>";
	echo "<input type='hidden' name='logout' value=1>";
	echo "<input type='submit' value='Deconnexion'> </form>";
	
	echo 'Aller a la page administration si vous etes admin en cliquant <a href=admin.php> ici</a>';
		
	if(isset($_GET["logout"]))
	{
		session_destroy();
		unset($_SESSION);
		header ('Location: index.php');
		exit();
	}
}

?>
