<?php

session_start();
if($_SESSION['id'])
{
$sel_blood_group;

$con=mysqli_connect("localhost","root","","rgmcse");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

echo '
<html>
<head>
    <style>
#header{
	color:white;
	background-color:red;
	padding:1px;
	height:110px;
}
#image img{
	position:absolute;
	top:18px;
	left:15px;
	height:80px;
	width:78px;
	padding:1px;
	border:2px solid black;
	border-radius:24px;
}
    
        	body {
			font-family: sans-serif;
			font-size: 20px;
			color: #444;
			font-color:#ff0000;
			margin:0px;
			padding:0px;
		}
		.button {
			display: inline-block;
			padding: 15px 25px;
			font-size: 24px;
			cursor: pointer;
			text-align: center;
			text-decoration: none;
			outline: none;
			color: #fff;
			background-color: #4CAF50;
			border: none;
			border-radius: 15px;
			box-shadow: 0 9px #999;
		}

		.button:hover {background-color: #3e8e41}

		.button:active {
			background-color: #3e8e41;
			box-shadow: 0 5px #666;
			transform: translateY(4px);
		}
		
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
			background-color: #4CAF50;
			text-align: center;
			color: white;
		}
		td {
			text-align: center;
		}
		
    
        select {
				margin-top:30px;
                width: 50%;
                padding: 16px 20px;
                border: none;
                border-radius: 4px;
                background-color: #f1f1f1;
                align:center;
                }
        input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 15px;
  align:center;
}        
                
    </style>
</head>
<body>

		<div id="header">	
			<h2 align="center">RGMCET  &   SRMC<br>
				BLOOD BANK DONATION </h2>
			<div id="image"><img src="ff.jpg"></div>
		</div>
<form method="GET" action="#" >
<select name="blood_group">  
  <option value="Select">Select Blood Group</option>  
  <option value="O+">O+</option> 
    <option value="O-">O-</option> 
    <option value="A+">A+</option> 
    <option value="B+">B+</option> 
    <option value="A-">A-</option> 
    <option value="AB+">AB+</option> 
    <option value="AB-">AB-</option> 
</select>
<br><br>
<input type="submit" name="submit" value="Get Donors"/>

</form>
</body>
</html>';

if(isset($_GET['submit'])){
    $sel_blood_group=$_GET['blood_group'];
    
    $result = mysqli_query($con,"SELECT * FROM blood WHERE Blood_Group='".$sel_blood_group."'");
    
    echo "<table border='2' align=center>
<tr>
<th>Student</th>
<th>Name</th>
<th>Branch</th>
<th>Blood Group</th>
<th>Contact</th>
<th>Branch_Contact</th>
<th>Eligibility</th>
</tr>";
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result))
  {

  echo "<tr>";
  echo "<td>" . $row['Student_id'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Branch'] . "</td>";
  echo "<td>" . $row['Blood_Group'] . "</td>";
  echo "<td>" . $row['Contact'] . "</td>";
  echo "<td>" . $row['Branch_Contact'] . "</td>";
  echo "<td>" . $row['Eligibility'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
    }else
    {
        echo "No Records Found";
    }
mysqli_close($con);
    
}
}
else
{
	header('Location: home1.php');
}
?>
