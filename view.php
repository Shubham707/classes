<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
</head>
<body>
	<div>
		<div><A href="register.php">Add Record</a></div>
		<div><A href="login.php">Login </a></div>
		<?php
		echo $_COOKIE[name];
		if(@$_GET['msg']!=""){
			echo '<h1>'.$_GET['msg'].'</h1>';
		}
		?>
	<table border="1" width="70%" >
		<tr>
			<th>User Name</th>
			<th>Email</th>
			<th>Full Name</th>
			<th>Registration Date</th>
			<th>Login Date</th>
			<th>Action</th>
		</tr>
		<?php
		include("db.php");
		$sql="Select * from users";
			$query=mysqli_query($db,$sql) or die("query is not excecute!");
			
			while($data=mysqli_fetch_assoc($query))
			{
		?>
		<tr>
			<td><?php echo $data['username']?></td>
			<td><?php echo $data['email']?></td>
			<td><?php echo $data['full_name']?></td>
			<td><?php echo $data['registration_date']?></td>
			<td><?php echo $data['last_login']?></td>
			<td><a href="edit.php?id=<?php echo $data['id']?>">Edit</a> | <a href="user.php?id=<?php echo $data['id'];?>&delete=delete">Delete</a> | <a href="profile.php?id=<?php echo $data['id'];?>">Profile</a></td>
		</tr>
		<?php }?>
	</table>
	</div>
</body>
</html>