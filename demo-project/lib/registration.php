<?php
include('../config/db.php');

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$name=$_POST['name'];
		$email=$_POST['email']; 
		$password=sha1($_POST['password']); 
		$phone=$_POST['phone']; 
		$department=$_POST['department']; 
		$date=$_POST['date']; 
		$doctor=$_POST['doctor']; 
		$address=$_POST['address'];  
		$message=$_POST['message']; 
		echo $sql="insert into doctors(full_name, email,password, phone,doctor_type,full_address,date_of_birth, doc_desc,department) values('$name','$email','$password','$phone','$doctor','$address','$date','$message','$department')";
		mysqli_query($database,$sql) or die("sql query is not exceute! registration page!");
		header("location:../login.php");
		
	}else{
		echo "method not allowed!";
	}

?>