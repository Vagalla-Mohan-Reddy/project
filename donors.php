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

echo '
<html>
	<head>
		<title>Home page</title>
		<style>
		body{
			padding:0px;
			margin:0px;
		}
#header{
	color:white;
	background-color:red;
	width:100%;
	height:100px;
}
	
#image img{
	position:absolute;
	top:7px;
	left:15px;
	height:80px;
	width:78px;
	padding:1px;
	border:2px solid black;
	border-radius:24px;
}
.profile{
	background-color:#f2f2f2;s
	padding:20px;
	border:2px solid black;
	border-radius:20px;
	color:white;
	margin-top:10px;
	margin-left:400px;
	margin-right:400px;
	margin-bottom:0px;
}
.profile img{
	margin-left:520px;
	margin-top:4px;
	display:center;
	border:2px solid black;
	border-radius:80px;
}
input[type="text"]
{
	background-color:#f2f2f2;
	margin-right:100px;
	border:none;
	border-bottom: 2px solid lightgray;
}
input[type="Submit"]{
	margin-left:520px;
	height:30px;
	width:100px;
	color:white;
	background-color: #3e8e41;
}
h2{
	text-color:green;
}
</style>
</head>
<body>
	<div id="header">	
		<h1 align="center">RGMCET  &   SRMC<br>
			BLOOD BANK DONATION</h1>
		<div id="image"><img src="ff.jpg"></div>
	</div>'
	?>
	<h1 align="center">Profile</h1>
	<div class="profile">
	<?php 
	    $result = mysqli_query($con,"SELECT * FROM blood WHERE Student_id='".$id."'");
		if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result))
		{ ?>
			<form  method="POST" action="Edit.php">
			 <img src="<?php echo $row['image']; ?>" height="150px" width="150px"/><br><br>
			 <table align="center" height="300px" width="300px">
				<tr>
					<td><h3>Roll Number</h3><input type="text" value="<?php echo $row['Student_id']; ?>" name="RollNumber"></td>
					<td><h3>Name</h3><input type="text" value="<?php echo $row['Name']; ?>" name="Name"></td>
				</tr>
				<tr>
					<td><h3>Branch</h3><input type="text" value="<?php echo $row['Branch']; ?>" name="Branch"></td>
					<td><h3>Blood_Group</h3><input type="text" value="<?php echo $row['Blood_Group']; ?>" name="Blood_Group"></td>
				</tr>
				<tr>
					<td><h3>Contact_Number</h3><input type="text" value="<?php echo $row['Contact']; ?>" name="Contact_Number"></td>
					<td><h3>Dept_Contact</h3><input type="text" value="<?php echo $row['Branch_Contact']; ?>" name="Dept_Contact"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><a href="Edit.php"><input type="submit" value="Edit" Onclick="SUCCESS()"/></a><td>
				</tr>
			</table>
			</form>
			<?php }
	}
?>
</body>
<script> 
	function SUCCESS()
	{
		alert("DO u want to Update");
	}
</script>
</html>
<?php
} 
else
{
	header('Location: home1.php');
}
?>