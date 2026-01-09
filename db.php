<?php
session_start();

$db=mysqli_connect("localhost","root","root","demo") or die("database is not connected!");
if(!$db){
	echo "database is not connected!";
}


?>