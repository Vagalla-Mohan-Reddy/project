<?php
	session_start();
	if($_SESSION['email'])
	{
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

		<title>Admin Block</title>
		<style>
			input{
				border:opx;
				
			}
			h5{
				background-color:green;
				width:200px;
				float:center;
				margin-top:20px;
				margin-left:450px;
			}
			h4{
				color:white;
				text-align:center;
			}
			input[type=text]{
					border:2px solid;
					border-radius:5px;
				}
			input[type=submit]
			{
				background-color:#FF0000;
				border:2px solid;
				border-radius:5px;
			}
			input[type=submit]:hover{
				width:70px
			}
			.ddd
			{
				border:1px solid;
				border-radius:10px;
				padding:1px;
				background-color:#c9c9c9
			}
			.ddd a{
				float:right;
				margin-right:10px;
			}
	</style>
	</head>
	<body class="bg-secondary text-white">
		<picture>
			<img src="ff.jpg" class="rounded float-left" alt="..." height="170px" width="170px">
			<img src="ff.jpg" class="rounded float-right" alt="..." height="170px" width="170px">
		</picture>
		<div class="container">
			<div class="jumbotron">
				<h1 class="text-danger" color="pink" align="center">RGMCET & SRMC BLOOD MANAGNMENT SYSTEM</h1>
			</div>
		<div class="ddd">
			<h6 align="center">Welcome Admin<span><a href="logout1.php"><h6>LogOut</h6></a></span></h6>
		</div>
		</div><br>
<div class="container">
	<div class="row row-cols-2 row-cols-md-4">
  <div class="col mb-5">	
    <div class="card bg-primary text-white">
	<form method="post" action="Blood.php"> 
	 <input type="hidden" value="A+" name="btn"/>
	  <button class="bg-primary text-white"><h1 align="center">A+</h1><p align="center">Click here to get the details of A+ blood group members</p></button>
	 </form>
    </div>
	</a>
  </div>
  <div class="col mb-5">
    <div class="card bg-light text-dark">
	 <form method="post" action="Blood.php"> 
	 <input type="hidden" value="B+" name="btn"/>
	 <button class="bg-light text-dark"><h1 align="center">B+</h1><p align="center">Click here to get the details of A+ blood group members</p></button></form>
    </div>
  </div>
  <div class="col mb-5">
    <div class="card bg-success text-white">
	<form method="post" action="Blood.php"> 
	 <input type="hidden" value="AB+" name="btn"/>
	 <button class="bg-success text-white"><h1 align="center">AB+</h1><p align="center">Click here to get the details of A+ blood group members</p></button></form>
    </div>
  </div>
  <div class="col mb-5">
    <div class="card bg-danger text-white">
	<form method="post" action="Blood.php"> 
	 <input type="hidden" value="O+" name="btn"/>
	  <button class="bg-danger text-white"><h1 align="center">O+</h1><p align="center">Click here to get the details of A+ blood group members</p></button></form>
    </div>
  </div>
  <div class="col mb-5">
    <div class="card bg-warning text-dark">
	<form method="post" action="Blood.php"> 
	 <input type="hidden" value="A-" name="btn"/>
	  <button class="bg-warning text-dark"><h1 align="center">A-</h1><p align="center">Click here to get the details of A+ blood group members</p></button></form>
    </div>
	</a>
  </div>
  <div class="col mb-5">
    <div class="card bg-info text-white">
	<form method="post" action="Blood.php"> 
	 <input type="hidden" value="B-" name="btn"/>
	  <button class="bg-info text-white"><h1 align="center">B-</h1><p align="center">Click here to get the details of A+ blood group members</p></button></form>
    </div>
  </div>
  <div class="col mb-5">
    <div class="card bg-white text-dark">
	<form method="post" action="Blood.php"> 
	 <input type="hidden" value="AB-" name="btn"/>
	  <button class="bg-Indigo text-dark"><h1 align="center">AB-</h1><p align="center">Click here to get the details of A+ blood group members</p></button></form>
    </div>
  </div>
  <div class="col mb-5">
    <div class="card bg-dark text-white">
	<form method="post" action="Blood.php"> 
	 <input type="hidden" value="O-" name="btn"/>
	  <button class="bg-dark text-white"><h1 align="center">O-</h1><p align="center">Click here to get the details of A+ blood group members</p></button></form>
    </div>
  </div>
  </div>
  <div>
	<h4 color="red" align="center">If you want to delete any Donors data(which is not useful to you).<br>
	please enter their rollnumber below</h4>
	<form method="POST" action="#" align="center">
		<input type="text" value="" name="roll">
		<input type="submit" value="Delete" name="btn1">
	</form>
  </div>
</body>
</html>

<?php
	if(isset($_POST['btn1']))
	{
		$con=mysqli_connect("localhost","root","","rgmcse");
		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else
		{
			$_result=mysqli_query($con,"DELETE FROM blood WHERE Student_id='".$_POST['roll']."'");
		}
		if($_result==1)
		{
			echo "
			<h5 align='center' id='myMsg'><b>Sucessfully Deleted</b></h5>";
?><html>
<head>
<script type="text/javascript">
 
function timedMsg()
{
document.getElementById('myMsg').style.color='white';
var t=setTimeout("document.getElementById('myMsg').style.display='none';",1000);
}
 
</script>
  <title></title>
</head>
<body>
<script language="JavaScript" type="text/javascript">timedMsg()</script>
</body>
</html><?php
		}
	}
	}
	else
	{
		header('Location: home1.php');
	}
?>
	
		
   