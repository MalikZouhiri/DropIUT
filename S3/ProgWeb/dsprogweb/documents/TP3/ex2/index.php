<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css"/>
		<title>Ex2 TP3</title>
	</head>
	
	<body>
		<?php
			include("traitement.php");
			sauvegarde();
			$tableau = array("toto", "titi");
		?>
		<?php
			echo "Votre adresse IP est :".$_SERVER['REMOTE_ADDR'];
			echo "<pre>";
			print_r($tableau);
			echo "</pre>";
			
			$tab = lecture();
		?>
		
		<table border='1'>
		<tbody>
		<?php
		for($i=0;$i<count($tab);$i=$i+2)
		{
			echo "<tr>";
			echo "<td>".$tab[$i]."</td>";
			echo "<td>".$tab[$i+1]."</td>";
			echo "</tr>";
		}
		?>
		</tbody>
		</table>
	
	
	</body>
</html>
