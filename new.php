<?php
	session_start();
	error_reporting(0);
	include("index2.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home page</title>
		<style>
		body{
			margin:0px;
			padding:0px;
		}
#header{
	color:white;
	background-color:red;
	padding:1px;
	height:18px;
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
body{
				background-color:#362f1e;
				}
			h1{
				color:white;
			}
			.register{
				border:2px solid;
				color:white;
				margin-left:370px;
				margin-right:360px;
				margin-top:45px;
				border:2px solid #66ffff;
				border-radius:24px;
				background-image:url("background1.jpg");
				background-repeat:no-repeat;
				background-size:905px 800px;
				height:500px;
				}
			.register tr,td{
					margin:10px;
					padding:10px;
					}
			input[type="text"],input[type="submit"],select{
					border:2px solid #cce6ff;
					border-radius:24px;
					height:30px;
					width:220px;
					text-align:center;
					background-color:white;
				}
				input[type="password"],select{
					border:2px solid #cce6ff;
					border-radius:24px;
					height:30px;
					width:220px;
					text-align:center;
					background-color:white;
				}
				input[type="submit"]{
					border-radius:24px;
					height:40px;
					width:170px;
					text-align:center;
					background-color:green;
					color:white;
				}
			select{
				height:37px;
				width:220px;
			}
			#header{
				height:20%;
			}

</style>
	</head>
	<body>
		<div id="header">	
			<h1 align="center">RGMCET  &   SRMC<br>
				BLOOD BANK DONATION</h1>
			<div id="image"><img src="ff.jpg"></div>
		</div>
		<div class="register">
		<form class="box" action="index.php" method="post" enctype="multipart/form-data">
			<table align="center" border="0" padding="2" height="500px" width="500px">
				<tr>
					<th colspan="3" align="center" color="red"><h1>Registration</h1></th>
				</tr>
				<tr>

					<td><input type="text" name="rollnumber" placeholder="Roll NUmber" required /></td>
					<td><input type="text" name="name" placeholder="Name" required /></td>
					<td><select name="Branch" required >
						 <option value="Select">Branch</option> 
 						 <option value="cse">CSE</option> 
   						 <option value="ece">ECE</option> 
   						 <option value="eee">EEE</option> 
    						 <option value="me">ME</option> 
    						 <option value="civil">CIVIL</option> 
					     </select></td>
				</tr>
				<tr>
					<td><select name="blood_group" required >
						 <option value="Select">Select Blood Group</option> 
 						 <option value="O+">O+</option> 
   						 <option value="O-">O-</option> 
   						 <option value="A+">A+</option> 
    						 <option value="B+">B+</option> 
    						 <option value="A-">A-</option> 
                                                 <option value="AB+">AB+</option> 
    						 <option value="AB-">AB-</option> 
					     </select>
					</td>
					<td><input type="text" name="contact" placeholder="Contact Number" required ></td>
					<td><input type="text" name="deptno" placeholder="Dep_contact"  required ></td>
				</tr>
				<tr>
						<td><input type="text" name="mail_id" placeholder="Mail id"  required /></td>
						<td><input type="password" name="password" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required /></td>
						<td colspan="3"><h2>Upload your image</h2><br><br><input type="file" name="imagedata" required></td>
				<tr>
					<td colspan="3" align="center"><input type="submit" name="submit" value="Register" onclick="validateEmail()"></td>
				</tr>
			</table>
		</form>
		</div>
	</body>
</html>