<?php
	session_start();
	if($_SESSION['email'])
	{
		unset($_SESSION['email']);
		header('Location: home1.php');
	}
	else
	{
		header('Location: home1.php');
	}
?>