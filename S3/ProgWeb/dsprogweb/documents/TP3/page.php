<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css"/>
		<title>Calculs statistiques</title>
	</head>
	
	<body>
	
	<h1 style="color: blue">Statistiques à une variable</h1>
	<p>__________________________________________________</p>
	
	<table border="1">
		<tbody>
			<tr>
				<td>caractère</td>
				<td>4</td>
				<td>6</td>
				<td>8</td>
			</tr>
			<tr>
				<td>effectif</td>
				<td>1</td>
				<td>2</td>
				<td>3</td>
			</tr>
		</tbody>
	</table>
	
	<br>
	<form method="get" action="">
	<select name="option" required pattern>
		<option value="Effectif">Effectif total</option>
		<option value="Moyenne">Moyenne</option>
		<option value="Ecart">Écart type</option>
	</select>
    <input type="submit" value="VALIDER" name="OK" />
	</form>
	<br><br>
	
	<?php
	include("fonctions.php");
	
	
	?>
	
	<h2> Résultats </h2>	
	
	<?php
	if (isset($_GET['option']))
	{
		if ($_GET['option']=="Effectif")
		{
			echo "<h2>Effectif total = ".calc_eff($effectif)."</h2>";
		}
		if ($_GET['option']=="Moyenne")
		{
			echo "<h2>Moyenne = ".calc_moy($caractere, $effectif)."</h2>";
		}
		if ($_GET['option']=="Ecart")
		{
			echo "<h2>Écart-Type = ".calc_ecart($caractere, $effectif)."</h2>";
		}
	}
	else
	{
	echo "COUCOU";
	}
	?>
	

	
	
	
	
	
	</body>
</html>