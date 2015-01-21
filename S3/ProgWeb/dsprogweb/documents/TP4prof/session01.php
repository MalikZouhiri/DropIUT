<?php
	session_start();
	include('constantes.php');
	if(isset($_GET['ide']))
	{
		$ide=$_GET['ide'];
		switch ($ide)
		{
			case 1:
				$message=PIRATE1;
				break;
			case 2:
				$message=PIRATE2;
				break;
			case 3:
				$message=PIRATE3;
				break;
		}
	}else $message="";
	if(!isset($_SESSION['oui']))
	{
		echo"<form action='' method='get'>
		LOG<input type='text' name='log' value='$message' />
		MDP<input type='password' name='mdp' />
		<input type='submit' name='ok', value='GO' />
		</form>";
	}
		
	if (isset($_GET['ok']))
	{
		if(isset($_GET['log']) && isset($_GET['mdp']))
		{
			foreach ($_GET as $cle => $val) $$cle=$val;
			if (($log=="admin") && ($mdp=="admin"))
			{
				$_SESSION['oui']=true;
				$_SESSION['log']=$log;
				header("location:session02.php");
			}
			else header("location:session01.php?ide=2");
		}
		else header("location:session01.php?ide=3");
	}