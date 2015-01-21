<?php
session_start();
if(isset($_SESSION['oui']))
{
	echo "<h1>INTRANET </h1>";
	echo "BONJOUR : ".$_SESSION["log"]."<hr />";
	echo "<form method='get' action ='deconx.php'>
	<input type='submit' name='deconx' value='DECONNEXION' />
	</form>
	";
	}
	else
	{
	header('Location:session01.php?ide=1');
	exit();
	}
	?>