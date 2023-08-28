<?php
/*
if(1==1){
echo "One is equal to one";
}

$number=10;
if($number > 10){
	echo "greather than 10";
	
}
elseif($number==10){
	echo "number equal to 10";
}

else{
	echo "less than or equal to 10";
}
*/

$password="test12345";
$old_password="test";
$user_input = "test";

if($user_input==$password){
	echo "Welcome!";
}
elseif ($user_input == $old_password){
	echo "this is old password";
}else{
	echo"parola gresita";
}
?>