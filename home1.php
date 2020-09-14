<?php
	session_start();
	error_reporting(0);
	include("index2.php"); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
        <meta charset="utf-8">
		<title>Home page</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYot
		<link rel="stylesheet" href="css/style4.css">
		
	</head>
	<body>
		<div class="full">
			<div class="container">
				<img src="ff.jpg">
				<h1 align="center">RGMCET  & SRMC<br>
				Blood Bank Managnment System</h1>
				<div class="student">
					<form action="#" method="post">
						<h1>Student Login</h1>
						<?php 
							if(@$_GET['invalid']==true);
							{
						?>
						<div class="php" border="2px solid Black" color="red" border-radius="13px"><h4 align="center" color:"red"><?php echo $_GET['invalid'];  ?></h4></div>
						<?php
							}
						?>
						<input type="text" name="email" placeholder="email" required><br>
						<input type="text" name="passwd" placeholder="password" required><br>
						<input type="submit" name="btn1" value="submit">
						<h4>If you are a new user please <a href="new.php">Click here.</a></h4>
					</form>
				</div>
				<div class="admin">
					<form action="#" method="POST">
					<h1>Admin Login</h1>
					<?php 
							if(@$_GET['invalid1']==true);
							{
						?>
						<div class="php" border="2px solid Black" color="red" border-radius="13px"><h4 align="center" color:"red"><?php echo $_GET['invalid1'];  ?></h4></div>
						<?php
							}
						?>
					<input type="text" name="gmail" placeholder="gmail" required><br>
					<input type="text" name="passwd" placeholder="password" required><br>
					<input type="submit" name="btn2" value="submit">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
	if(isset($_POST["btn1"]))
	{
		$email=$_POST["email"];
		$password=$_POST["passwd"];
		
		$con=mysqli_connect("localhost","root","","rgmcse");
		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$result = mysqli_query($con,"SELECT * FROM blood WHERE mail='".$email."' AND passwd='".$password."'");
		
		$result1=mysqli_query($con,"SELECT * FROM blood WHERE mail='".$email."'");
		$count = mysqli_num_rows($result);
		if($count==0){
			header('Location:home1.php?invalid=Invalid User Name or Password');
			}
		else
		{	$row = mysqli_fetch_array($result1);
			$_SESSION['mail']=$row['Name'];
			$_SESSION['id']=$row['Student_id'];
			if($_SESSION['id'])
			{
				header('Location: home.php?welcome');
			}
		}
	}
?>
<?php
	if(isset($_POST["btn2"]))
	{
		$email=$_POST["email"];
		$password=$_POST["passwd"];
		if($email="admin@123" and $password="admin"){
				$_SESSION['email']="admin@123";
				header('Location: admin.php');
		}
		else
		{
			header('Location:home1.php?invalid1=Invalid User Name or Password');
		}
	}
?>

	
