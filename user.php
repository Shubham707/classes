<?php

include("db.php");
	if(@$_GET['logout']){
		echo "logout";
		session_destroy();
		$msg= "User Logout! try again!?";
			
		header('Location:login.php');

	}

	if(@$_POST['login']=="login"){
		

		if($_POST['email']!='' && $_POST['password']!=''){

			  $email=$_POST['email'];
			  $password=sha1($_POST['password']);
			

			$sql="Select * from users where email='$email' and password_hash='$password'";
			
			$query=mysqli_query($db,$sql) or die("query is not excecute!");
		
			$data=mysqli_fetch_assoc($query) or die("num_rows gether then 0 then check query!");

			$_SESSION['user_name']=$data['username'];
			$_SESSION['email']=$data['email'];
			$_SESSION['unique_id']=$data['id'];

			$msg= "Login successfully!";
			
			header('Location:profile.php');


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
		$query=mysqli_query($db,$sql) or die("query is not excecute!");
		if($query){

			$msg= "insert successfully!";
			header('Location:view.php?msg='.$msg);
		}else{
			die(msql_error());
		}

	}
	if(@$_POST['update']=="update"){
		$user_id= $_POST["user_id"];
		$name= $_POST['fullname'];
		 $username=$_POST['fullname'];
		 $email=$_POST['email'];
		 $city=$_POST['city'];
		 $state=$_POST['state'];
		 $country=$_POST['country'];
		 $pincode=$_POST['pincode'];
		 $dob=$_POST['dob'];
		 if($_FILES['file']['name']){
		 	 $distination = "./uploads/";
		 	$photo=$_FILES['file']['name'];
		 	  $_FILES["file"]["tmp_name"];
		 	$data=move_uploaded_file($_FILES["file"]["tmp_name"],
            $distination . $_FILES["file"]["name"]);
		 }
		 

		 //$sql="update set users username='$username',email='$email',full_name='$name' where id='$user_id'" ";

		 
		  $sql="insert into user_profiles(user_id,city,state,country,pincode,date_of_birth,photo) values('$user_id','$city','$state','$country','$pincode','$dob','$photo')";
		$query=mysqli_query($db,$sql) or die("query is not excecute!");
		if($query){
			$msg= "Update successfully!";
			header('Location:view.php?msg='.$msg);
		}else{
			die(msql_error());
		}
	}
	if(@$_REQUEST['delete']=='delete'){

		$id= $_REQUEST['id'];
		 $sql="delete from users where id='$id'";
		$query=mysqli_query($db,$sql) or die("query is not excecute!");
		if($query){
			$msg= "Delete successfully!";
			header('Location:view.php?msg='.$msg);
		}else{
			die(msql_error());
		}
	}

?>