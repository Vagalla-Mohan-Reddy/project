<?php
	session_start();
	error_reporting(0);
	include("index2.php");
	if($_SESSION['id'])
	{
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home page</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="header">	
			<h1>RGMCET  &   SRMC<br>
				BLOOD BANK DONATION</h1>
			<div id="image"><img src="ff.jpg"></div>
		</div>
		<div id="clg">
			<img src="rgm3.png">
			<ul>
			<? php
			if(@$_GET['welcome']==true);
			{
			?>
		<h4 color="red" align="center"><?php 
					session_start();
					echo "Welcome ".$_SESSION['mail']; ?><h4>
		<? php
			}
		?>
				<li><a href="eligible.php">Eligibility</li>
				<li><a href="receive.php">Donor's Info</li>
				<li><a href="donors.php">Donor Profile</li>
				<li><a href="logout.php">Logout</li>
				
			</ul>
		</div>
	</body>
</html>
<?php 
}
else
{
	header('Location: home1.php');
}
?>