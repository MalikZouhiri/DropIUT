<?php
session_start();

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
		
	// DECONNEXiON
	echo "<form action='' method='get'>";
	echo "<input type='hidden' name='logout' value=1>";
	echo "<input type='submit' value='Deconnexion'> </form>";
		
	if(isset($_GET["logout"]))
	{
		session_destroy();
		unset($_SESSION);
		header ('Location: index.php');
		exit();
	}
}

?>
