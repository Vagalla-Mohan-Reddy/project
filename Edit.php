<?php
session_start();
if($_SESSION['id'])
{
$id=$_SESSION['id'];
echo $id;
$con=mysqli_connect("localhost","root","","rgmcse");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"UPDATE blood SET Student_id = '".$_POST['RollNumber']."' ,Name= '".$_POST['Name']."',Branch= '".$_POST['Branch']."',Blood_Group= '".$_POST['Blood_Group']."',Contact= '".$_POST['Contact_Number']."',Branch_Contact= '".$_POST['Dept_Contact']."' WHERE Student_id='".$id."'");
if(result)
{
	header('Location: home.php');
}
}
else
{
	header('Location: home1.php');
}
?>