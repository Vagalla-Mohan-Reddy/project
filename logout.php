<?php
	session_start();
	if(isset($_SESSION['mail']))
	{
		unset($_SESSION['mail']);
		unset($_SESSION['id']);
		header("Location: home1.php",true,301);
	}
	else
	{
		header('Location: home1.php');
	}
?>