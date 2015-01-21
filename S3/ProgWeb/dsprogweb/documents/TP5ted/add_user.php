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

echo '<br>';
echo'<form action="" method="post"> <br>';
echo 'Entrer Login :    <input type="text" name="login"> <br><br>';
echo 'Entrer MDP :  <input type="text" name="password"><br> <br>';
echo '<input type="submit" value="Ajouter utilisateur"> </form> <br><br>';
echo'</form>';

echo 'Retourner a la page administration en cliquant <a href=admin.php> ici</a>';
if (isset($_POST['login']) && isset($_POST['password'])) {

   $login=$_POST['login'];
   $password=$_POST['password'];
   $query="INSERT INTO users VALUES (?,?)";
   $query_prep=mysqli_prepare($connexion,$query);
   mysqli_stmt_bind_param($query_prep, 'ss',$login,$password);
   mysqli_stmt_execute($query_prep);
   header ('Location: admin.php');
   exit();
  }
?>