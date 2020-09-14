<?php
include 'include.html';
session_start();

$sel_blood_group;

$con=mysqli_connect("localhost","root","","rgmcse");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  echo "<style>
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
			color:black;
		}
		h1{
			color:green;
			text-align:center;
		}
		</style>";
   $sel_blood_group=$_POST['btn'];
    
   $result = mysqli_query($con,"SELECT * FROM blood WHERE Blood_Group='".$sel_blood_group."'");
   if (mysqli_num_rows($result)<=0)
    {
        echo "<h1>No Records Found</h1>";
    }
    if (mysqli_num_rows($result) > 0) {
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
	}
mysqli_close($con);
?>