<?php	
// CSS
	echo '<style type="text/css">';
		echo 'table {';
		echo 'border-collapse: collapse;';
		echo '}';
		echo 'td, th {';
		echo 'border: 1px solid black;';
		echo '}';
	echo '</style>';
?>

<?php
$value=0;

// Affichage IP 
$adresse_ip = $_SERVER['REMOTE_ADDR'];
echo "Votre adresse ip est : $adresse_ip .";
echo '<br> <br>';

// Stockage
$value=lire("ip.txt");

// Si IP deja dans la table on l'enregistre
if (dejaco($value,$adresse_ip)== 0){
	$date = date("Y-m-d H:i:s"); 
	$fichier = fopen("ip.txt", "a");
	fputs($fichier, "$adresse_ip,$date \n");
	fclose($fichier);
}
else {
	$value=permutation($value,$adresse_ip);
}

// Affichage du lien
echo ' <p> Si vous voulez afficher un tableau contenant IP + Date de visite des visiteurs : <a href="index2.php?value=1">Cliquez ici</a> .<br>';

// Affichage du tableau si clic
if (!empty($_GET['value'])): 
	echo '<br> <br>';
	echo '<center>';
	echo '<table>';
		echo '<caption>VISITEURS</caption>';
			echo '<tr>';
				echo '<td>';
				echo "IP";
				echo '</td>';
				echo '<td>';
				echo "DATE";
				echo '</td>';
			echo '</tr>';
			for($i=0;$i<count($value);$i++) {
			echo '<tr>';
				echo '<td>';
				echo $value[$i][0];
				echo '</td>';
				echo '<td>';
				echo $value[$i][1];
				echo '</td>';
			echo '</tr>';
			}
	echo '</table>';
	echo '</center>';
endif;
?>

<?php
function lire($nom_fichier){
    $row = 0;
    $donnee = array();    
    $f = fopen ($nom_fichier,"r");
    $taille = filesize($nom_fichier)+1;
    while ($donnee = fgets($f, $taille)) {
        $result[$row] = $donnee;
		$contenu[$row] = explode("," , $result[$row]);
        $row++;
    }
	//print_r($contenu);
    fclose ($f);
	return $contenu;
}

function dejaco(array $table,$ip){
		$dejaco=0;
		for($i=0;$i<count($table);$i++) {
			if ($table[$i][0]===$ip){
				$dejaco=1;
			}
		}
	return $dejaco;
}

function permutation(array $table,$ip){
		$date = date("Y-m-d H:i:s"); 
		$old_date = date("Y-m-d H:i:s");
		for($i=0;$i<count($table);$i++) {
			if ($table[$i][0]===$ip){
				echo '<br>';
				echo "Derniere connexion |";
				echo $table[$i][0]," | ";
				echo $table[$i][1];
				echo '<br>';
				$old_date=$table[$i][1];
				$table[$i][1]=$date;
			}
		}
	return $table;
}
?>
