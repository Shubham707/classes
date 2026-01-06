<?php
include("db.php");

	if(@$_POST['login']=="login"){

		if($_POST['email']!='' && $_POST['password']!=''){

			 $email=$_POST['email'];
			 $password=sha1($_POST['password']);

			 $sql="Select * from users where email='$email' and password_hash='$password'";
			$query=mysqli_query($db,$sql) or die("query is not excecute!");
			$data=mysqli_fetch_assoc($query) or die("num_rows gether then 0 then check query!");

			print_r($data);


		}else{
			echo "please complete below the form!";
		}
	}

	if(@$_POST['reg']=="reg"){
		 $name= $_POST['fullname'];
		 $username=$_POST['fullname'];
		 $email=$_POST['email'];
		  $password=sha1($_POST['password']);
		 $city=$_POST['city'];
		 $address=$_POST['address'];
		 $country=$_POST['country'];
		 $state=$_POST['state'];
		 $pincode=$_POST['pincode'];
		 $sql="insert into users(username,email,password_hash,full_name) values('$username','$email','$password','$name')";
		//$query=mysqli_query($db,$sql) or die("query is not excecute!");
		if($query){
			echo "insert successfully!";
		}else{
			die(msql_error());
		}

	}
?>