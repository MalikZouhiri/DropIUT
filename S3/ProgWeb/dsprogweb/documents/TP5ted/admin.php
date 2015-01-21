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

// Préparation query SQL
$connexion=mysqli_connect($serveur, $login, $mdp) or die ("Connexion Impossible");
$bd="tp5";
mysqli_select_db($connexion, $bd);
$query='SELECT * from clients';
$result=mysqli_query($connexion,$query);
$query2='SELECT login from users';
$result2=mysqli_query($connexion,$query2);

// VERiFiER Si UNE CONNEXiON A ETE FAITE
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
	echo "<br />";
	echo "<h1> Administration </h1>";

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
		echo '<td>';
		echo "<b>Actions</b>";
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
				echo '<td>';
				echo '<a href=del.php?id='.$ligne[0].'>Suppression</a>';
				echo ' || ';
				echo '<a href=update.php?id='.$ligne[0].'>Modifier</a>';
				echo '</td>';
				if($i==4) echo '</TR>';
					
			}
	echo '</table> <br/>';

echo '<table>';
	echo '<TR>';
		echo '<td>';
		echo "<b>USERS</b>";
		echo '</td>';
		echo '<td>';
		echo "<b>ACTIONS</b>";
		echo '</td>';
	echo '</TR>';		
		while($ligne=mysqli_fetch_row($result2))
			{
				echo '<TR>';
				echo '<td>';
				echo $ligne[0];
				echo '</td>';
				echo '<td>';
				echo '<a href=del_user.php?login='.$ligne[0].'>Suppression</a>';
				echo '</td>';
				echo '</TR>';
			}
			echo '<TR>';
			echo '<td>';
			echo '<a href=add_user.php>Ajouter</a>';
			echo '</td>';
			echo '</TR>';
	echo '</table> <br/>';	
		
	// DECONNEXiON
	echo "<form action='' method='get'>";
	echo "<input type='hidden' name='logout' value=1>";
	echo "<input type='submit' value='Deconnexion'> </form>";
	
	echo 'Aller a la page accueil en cliquant <a href=accueil.php> ici</a>';
		
	if(isset($_GET["logout"]))
	{
		session_destroy();
		unset($_SESSION);
		header ('Location: index.php');
		exit();
	}
?>
