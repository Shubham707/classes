	<?php
       include('db.php');
		if(@$_GET['id']!="" || $_SESSION['unique_id']){
			
           
            $id= $_SESSION['unique_id']!=''? $_SESSION['unique_id']: $_GET['id'];
         

            $sql="Select * from users join user_profiles on user_profiles.user_id=users.id where id='$id'";
			$query=mysqli_query($db,$sql) or die("query is not excecute!");
			$data=mysqli_fetch_assoc($query) or die("num_rows gether then 0 then check query!");
           


		}else{
            header('location:login.php');
        }
		?>
        <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <img src="./uploads/<?php echo $data['photo'];?>" alt="John" style="width:100%">
  <h1><?php echo $data['username'];?></h1>
  <p class="title"><?php echo $data['email'];?></p>
  <p><?php echo $data['city'].' '.$data['state'].' '.$data['country'];?></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><a href="user.php?logout='logout'">Logout</a></p>
</div>

</body>
</html>
