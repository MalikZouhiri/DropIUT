<?php
	$caractere=array(4,6,8);
	$effectif=array(1,2,3);

function calc_eff($effectif)
	{
		$tot = 0;
		foreach($effectif as $val)
		{
			$tot = $tot + $val;
		}
		return $tot;
	}
	
function calc_moy($caractere, $effectif)
	{
		$moy = 0;
		for($i=0;$i<count($caractere);$i++)
		{
			$moy += $caractere[$i]*$effectif[$i];
		}
		$moy = $moy/calc_eff($effectif);
		return $moy;
	}
	
function calc_ecart($caractere, $effectif)
	{
		$truc ="pas le temps, à faire oui oui baguette";
		return $truc;
	}
?>