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
			text-align: center;

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
			<h2 > User Registration Form</h2>
			<div class="box_set">
				Full Name: <input type="text" name="fullname" id="fullname">
			  Email: <input type="email" name="email" id="email">
		    </div>
		    <br>
		    <div class="box_set">
		    Address:<input type="text" name="address" id="address">
			  Password: <input type="password" name="password" id="password">
		    </div>
		    <br>
		    <div class="box_set">
		    City:<input type="text" name="city" id="city">
			  State: <input type="text" name="state" id="state">
		    </div>
		    <br>
		    <div class="box_set">
		    Country:<input type="text" name="country" id="country">
			  Pincode: <input type="text" name="pincode" id="pincode">
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
  let fullname = document.forms["myForm"]["fullname"].value;
  if (fullname == "") {
    alert("fullname must be filled out");
    return false;
  }
  let about = document.forms["myForm"]["password"].value;
  if (about == "") {
    alert("password must be filled out");
    return false;
  }
  let address = document.forms["myForm"]["address"].value;
  if (address == "") {
    alert("address must be filled out");
    return false;
  }
  let city = document.forms["myForm"]["city"].value;
  if (city == "") {
    alert("city must be filled out");
    return false;
  }
  let state = document.forms["myForm"]["state"].value;
  if (state == "") {
    alert("state must be filled out");
    return false;
  }
  let country = document.forms["myForm"]["country"].value;
  if (country == "") {
    alert("country must be filled out");
    return false;
  }
  let state = document.forms["myForm"]["country"].value;
  if (state == "") {
    alert("state must be filled out");
    return false;
  }
}
</script>
</html>