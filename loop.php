type of loop=>  for, while and foreach;

<?php
//initilizaton; condition; increment/decremment;

$a=1;
$b=20;
for($i =$a; $i <= $b; ++$i){
	if($i % 2 == 0 ){
		echo "number is even:".$i ."<br>";
	}else{
		echo "number is odd:".$i."<br>";
	}
	
}

echo "</br>";
$array1=array("1"=>"abcdrerer","2"=>"efgh","3"=>"ijkl",);
foreach ($array1 as $key=>$value) {
	echo $key."=>".strlen($value);echo "</br>";
}

$var="soham";
echo "</br>";
echo ucfirst($var);
?>