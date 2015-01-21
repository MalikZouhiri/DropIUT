<?php
	
	function sauvegarde()
	{
		$file_name = "tableau_ip.txt";
		$date = date("Y-m-d H:i:s");
		$file =fopen($file_name, "a");
		fwrite($file, $_SERVER['REMOTE_ADDR'].",".$date.",\r\n");
		fclose($file);
	}
	
	function lecture()
	{
		$file_name = "tableau_ip.txt";
		$file = fopen($file_name, "r");
		$contenu = fread($file, filesize($file_name));
		$tab = explode(",", $contenu);
		return $tab;
		
	
	}
?>
		