<!DOCTYPE html>
<html>
<head>
	<title>Javascript</title>
</head>
<body>
	<?php
	echo @$_POST['fname'].'</br>';
	echo @$_POST['about'];
	?>
<form name="myForm" action="#" onsubmit="return validateForm()" method="post">
  Name: <input type="text" name="fname" id="fname">  
  <!-- onkeyup="checkName()" -->
  about:<textarea name="about" id="about"></textarea>

  <input type="submit" value="Submit">
</form>

</body>

<script>
	function checkName(){
		let fname=document.getElementById('fname').value;
		if(fname!=""){
			alert("name is also end!");

		}

	}
function validateForm() {
  let fname = document.forms["myForm"]["fname"].value;
  if (fname == "") {
    alert("Name must be filled out");
    return false;
  }
  let about = document.forms["myForm"]["about"].value;
  if (about == "") {
    alert("About must be filled out");
    return false;
  }
}
</script>
</html>