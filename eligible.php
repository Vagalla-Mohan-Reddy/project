<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style>
		*{
			margin:0px;
			padding:0px;
		}
		#header{
			color:white;
			background-color:red;
			height:100px;
		}
		#image img{
			position:absolute;
			top:7px;
			left:15px;
			height:80px;
			width:78px;
			border:2px solid black;
			border-radius:24px;
		}
		h1{
				color:white;
				
			}
		h2{
			margin-top:10px;
		}
		.eligible{
			border:2px solid;
			border-radius:10px;
			margin-left:300px;
			margin-right:300px;
			margin-top:10px;
			padding:50px;
			background-color:#c9c9c9;
		}
	</style>
  </head>
  <body>
	<div id="header">	
			<h1 align="center">RGMCET  &   SRMC<br>
				BLOOD BANK DONATION</h1>
			<div id="image"><img src="ff.jpg"></div>
	</div><br /><br>
	<h2 align="center"> Eligibility</h2>
	<div class="eligible" align="center">
		<marquee>There must be 3 months gap between successive donations.</marquee><br /><br>
		<form action="#" method="GET">
			<input type="radio" name="radio" value="YES">YES
			<input type="radio" name="radio" value="NO">No<br /><br>
			<input type="submit" name="submit" value="submit" />
		</form>
	</div>
  </body>
</html>
<?php
session_start();
if($_SESSION['id'])
{
$id=$_SESSION['id'];
$con=mysqli_connect("localhost","root","","rgmcse");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if (isset($_GET['submit'])) {
if(isset($_GET['radio']))
{
	$result = mysqli_query($con,"UPDATE blood SET Eligibility= '".$_GET['radio']."' WHERE Student_id='".$id."'");
	if($result)
	{
		echo "<script> alert('you are Eligible'); </script>";
		header("Location: home.php");
	}
}
  }
}
else
{
	header('Location: home1.php');
}
?>