 <?php
include 'parametre.php';
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
// CONNEXiON
$connexion=mysqli_connect($serveur, $login, $mdp) or die ("Connexion Impossible");
$bd="tp5";
mysqli_select_db($connexion, $bd);

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

if(isset($_GET['id']) && $_GET['id']!='')
{
   $id = $_GET['id'];
   $query ='SELECT * FROM clients WHERE id ='.$id;
   $result=mysqli_query($connexion,$query) or die("Erreur dans la suppression");
 
} 
while ($ligne = mysqli_fetch_row($result) )
{
echo '<br> Ligne qui va etre modifier : <br><br>';
echo'<table>';
		$nom=$ligne[1];
		$ville=$ligne[4];
		$mail=$ligne[2];
		for($i=1;$i<5;$i++)
				{
						echo '<td>';
						echo $ligne[$i];
						echo '</td>';
				}					
}
echo'</table>';
echo '<br>';
echo'<form action="traitement_update.php" method="post"> <br>';
echo '<input type="hidden" name="id" value='.$id.'> <br>';
echo 'Changer nom du client :    <input type="text" name="nom" value='.$nom.'> <br><br>';
echo 'Changer email du client :  <input type="text" name="mail" value='.$mail.'><br> <br>';
echo 'Changer ville du client :  <input type="text" name="ville" value='.$ville.'><br> <br>';
echo '<input type="submit" value="Modifier"> </form> <br><br>';
echo'</form>';

echo 'Retourner a la page administration en cliquant <a href=admin.php> ici</a>';
	
?>
	
 