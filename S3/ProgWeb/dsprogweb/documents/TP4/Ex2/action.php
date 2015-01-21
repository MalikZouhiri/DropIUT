<?php
$login = "admin";
$password = "pass";

	if ($login == $_POST['login'] && $password == $_POST['pwd'])
	{
		session_start();
		$_SESSION['login'] = $_POST['login'];
		header('Location: intranet.php');
	}
	else
	{
		if ($login = $_POST['login'] && $password != $_POST['pwd'])
		{
			header('Location: index.php');
		}
		if ($login != $_POST['login'] && $password = $_POST['pwd'])
		{
			header('Location: index.php');
		}
		if ($login != $_POST['login'] && $password != $_POST['pwd'])
		{
			header('Location: index.php');
		}
	}
?>
	