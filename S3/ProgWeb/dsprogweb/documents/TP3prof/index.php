<?php
$capture1=$_SERVER['REMOTE_ADDR'];
$capture2=date("H:i");
$capture3="";

//création du fichier

if (!file_exists("toto.csv"))
{
	$filep = fopen("toto.csv","a+");
	
	//ecriture du fichier csv
	
	$capture[]=$capture1;
	$capture[]=$capture2;
	$capture[]=$capture3;
	$ligne[]=$capture;
	foreach($ligne as $val)
	{
		fputcsv($filep,$val);
	}
	fclose($filep);
	$ligne = null;
}

else
{
	//ouverture en lecture
	$filep=fopen("toto.csv","r");
	$k=0;
	$trouve=false;
	
	//on lit touuuut le fichier
	while($ligne = fgetcsv($filep,1024,","))
	{
		//pour debug
		/*
		echo "variable ligne<pre>";
		print_r($ligne);
		echo"</pre>";
		}*/ // fin while debug
		
		echo "ligne $k:<br>";
		
		//Si l'adresse IP a déjà visité
		if(in_array($capture1,$ligne))
		{
			$ligne[0]=$capture1;
			$ligne[1]=$ligne[2];
			$ligne[2]=$capture2;
			$buffer[]=$ligne; //mise en tampon
			$trouve = true; //on a trouvé
		}
		//Sinon on ne touche pas aux données
		else
		{
			$buffer[]=$ligne;
		}
		$k++;
	}//while
	
//si l'adresse IP est new :

	if (!$trouve)
	{
		$ligne[0] = $capture1;
		$ligne[1] = $capture2;
		$ligne[3] = "";
		$buffer[]=$ligne; //mise en tampon
	}
}//else

// pour debug
echo "<hr><pre>";
print_r($buffer);
echo"</pre><hr>";
// fin debug

//fermeture du fichier

fclose($filep);

//réouverture du fichier pour réécriture du buffer
$filep = fopen("toto.csv","w");
foreach($buffer as $val)
{
	fputcsv($filep,$val);
}
fclose($filep);
?>