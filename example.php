<?php

$a=10;
$b=20;
$c="";

$c=$a;

if($a == $c){
	echo $a;
}else{
	echo $c;
}
echo "</br>";
if($a === $c){
	echo $a;
}else{
	echo $c;
}
echo "</br>";
if($a != $c){
	echo $a;
}else{
	echo $b;
}



echo "</br>";

echo $a==$c ? $a : $b;
echo "</br>";
if($a==$c | $c==$b || $b==$a){
	echo $a;
}else{
	echo $b;
}

//echo $c;


?>