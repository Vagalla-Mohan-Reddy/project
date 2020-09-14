<?php
    $userid=$_POST["user_name"];
    $mailid=$_POST["mail_id"];
	$rollnumber=$_POST["roll_number"];
    $password=$_POST["password"];
    try{
        $conn=new PDO("mysql:host=localhost;dbname=rgmcse","root"."");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="INSERT INTO admin(roll_number,user_id,mail,password)VALUES('$rollnumber','$userid','$mailid','$password')";
        $conn->exec($sql);
        echo"Registration Successfull";
        
        //Sleep for five seconds.
        sleep(5);
 
        //Redirect using the Location header.
        header('Location: home1.php');
    }
    catch(PDOException $e){
        echo $sql . "br>" . $e->getMessage(); 
    }
$conn=null;
?>