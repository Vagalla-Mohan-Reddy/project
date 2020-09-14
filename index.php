<?php
    $student_id=$_POST["rollnumber"];
    $name=$_POST["name"];
    $branch=$_POST["Branch"];
    $bloodgroup=$_POST["blood_group"];
    $contact=$_POST["contact"];
    $deptid=$_POST["deptno"];
	$mail_id=$_POST["mail_id"];
	$passwd=$_POST["password"];
	if(isset($_POST['submit'])){
		$filename=$_FILES["imagedata"]["name"];
		$filepath=$_FILES["imagedata"]["tmp_name"];
		$folder='folder/'.$filename;
		move_uploaded_file($filepath,$folder);
	}
    try{
        $conn=new PDO("mysql:host=localhost;dbname=rgmcse","root"."");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="INSERT INTO blood(Student_id,Name,Branch,Blood_Group,Contact,Branch_Contact,image,mail,passwd)VALUES('$student_id','$name','$branch','$bloodgroup','$contact','$deptid','$folder','$mail_id','$passwd')";
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