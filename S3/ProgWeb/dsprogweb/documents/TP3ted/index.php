<?php
// TP 3
//EXERCICE 1
?>

<?php

// LECTURE FiCHIER
$nom_fichier="data.csv";
$row = 0;
$donnee = array();    
$f = fopen ($nom_fichier,"r");
$taille = filesize($nom_fichier)+1;
while ($donnee = fgetcsv($f, $taille, ",")) {
	 $caractere [$row] = $donnee[0];
	 $effectif[$row]= $donnee[1];
	 $row++;
}
fclose ($f);

// HTML

	echo '<style type="text/css">';
		echo 'table {';
		echo 'border: medium solid #000000;';
		echo '}';
		echo 'td, th {';
		echo 'border: thin solid #6495ed;';
		echo '}';
	echo '</style>';
	
	echo '<h1 style="text-decoration:underline;"> Statistiques a une variable </h1>';
	echo '<h2> Tableau des donnees </h2>';
	echo '<table>';
	echo '<TR>';
		foreach ($caractere as $value) {
			echo '<td>';
			echo $value;
			echo '</td>';
		}
	echo '</TR>';
	echo '<TR>';
		foreach ($effectif as $value) {
			echo '<td>';
			echo $value;
			echo '</td>';
		}
	echo '</TR>';
	echo '</table> <br/>';
		echo ' <form action="" method="get">';
			echo '<select name="choix" size="1">';
				echo '<option value=1>	Moyenne	</option>';
				echo '<option value=2>	Effectif Total	</option>';
				echo '<option value=3>	Ecart Type	</option>';
			echo '</select>';
			echo '<p><input type="submit" value="Valider"></p>';
		echo '</form>';
		echo '<h1 style="text-decoration:underline;"> Resultats </h1>';

?>

<?php
// TRAITEMENT
function Moyenne(array $table1, array $table2)
{  
	$Nb = array_sum($table2);
	$length=count($table1)-1;
	$Somme = 0; 
	
	for ($i = 1; $i<=$length; $i++)
	{ 
		$Somme += $table1[$i] * $table2[$i]; 
	} 
	return ($Somme / $Nb); 
}

function Effectif_Total(array $table)
{
	return array_sum($table);
}

function Ecart_type(array $table1, array $table2)
{ 
	$n = Effectif_Total($table2);
	$moyenne =  Moyenne($table1, $table2);
	$somme = 0;
	$length=count($table1)-1;
	
	for ($i = 1; $i<=$length; $i++)
	{  
		$somme += $table2[$i]*(pow($table1[$i] - $moyenne,2)); 
	} 
	return sqrt($somme/$n);
}
if (isset($_GET['choix']))
{
	if ( $_GET["choix"] == 1)
	{
		echo "Moyenne : ", Moyenne($caractere , $effectif), "<br>";
	}
	
	if ( $_GET["choix"] == 2)
	{
		echo "Effectif Total : ", Effectif_Total($effectif), "<br>";
	}
	
	if ( $_GET["choix"] == 3)
	{	
		echo "Ecart Type : ", Ecart_type($caractere , $effectif), "<br>";
	}    
}
?>