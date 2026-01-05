there are 4 type of error?

1 : fetal error
2 : parse error
3 : Notice
3 : warning 

4: try
5: catch
6: finally
</br>
<?php 







$array1=array("abcd","abcdf"."ajsfgjsagf","svafkjsa");
function abcd($arg){
	encodeData($arg);
}
abcd($array1);

echo "<br>";
$array2=array("abcdsdas","abcdfasdsad"."ajsfasdsadgjsagf","asdsadsadsad");
function abcdefg($arg){
	encodeData($arg);
}
abcdefg($array2);





//// helper function
function encodeData($agrs){
	echo json_encode($agrs);
}




?>