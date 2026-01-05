<!DOCTYPE html>
<html>
<head>
	<title>Login User</title>
	<style>
		.login_form{
			background-color: #9dfc03;
			margin: 20px;
			padding: 20px;
			width: 50%;

		}
		.box_set{
			text-align: center;
		}
		#submit{
			background-color: #9dfc03;
			color: red;
			padding: 15px 10px 15px 10px;

			/* left,top,right,bottom */
		}
		h2{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="login_form">
		<form name="myForm" action="user.php" onsubmit="return validateForm()" method="post">
			<h2 > Login Form</h2>
			<div class="box_set">
			  Email: <input type="email" name="email" id="email">
		    </div>
		    <br>
		    <div class="box_set">
			  Password: <input type="password" name="password" id="password">
		    </div>
		    <br>

		    <div class="box_set">
			   <input type="submit" name="submit" id="submit" value="Send">
		    </div>
			
		</form>
	</div>
</body>

<script>
	
function validateForm() {
  let fname = document.forms["myForm"]["email"].value;
  if (fname == "") {
    alert("Email must be filled out");
    return false;
  }
  let about = document.forms["myForm"]["password"].value;
  if (about == "") {
    alert("password must be filled out");
    return false;
  }
}
</script>
</html>