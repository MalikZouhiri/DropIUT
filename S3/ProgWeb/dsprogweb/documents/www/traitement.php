<?php
include 'data.php'; 

function Moyenne(array $table1, array $table2)
{  
	$Nb = array_sum($table2);
	
	$Somme = 0; 
	
	for ($i = 0; $i<=2; $i++)
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
	
	for ($i = 0; $i<=2; $i++)
	{  
		$somme += $table2[$i]*(pow($table1[$i] - $moyenne,2)); 
	} 
	return sqrt($somme/$n);
}

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
?>