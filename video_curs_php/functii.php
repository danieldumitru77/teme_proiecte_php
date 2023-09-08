<?php

//metodele se pozitioneaza sus cel mai bine in cod
/*
function calculate($a=10,$b=10) {
   global $x;
  $x=10;   
   $c=$a+$b+$x;
   
   return $c;
}	


/*function text(){
	
	echo "Hello from function!";
}

text();
text(10,20,30);


echo calculate() . "<br>";
echo $x;
*/

function fahrenheit_to_celsius ($temp_f) {
	$temp_c = ($temp_f-32)/1.8;
	
	return $temp_c;
}
$fahrenheit=68;
echo "$fahrenheit degress in fahrenheit is " . fahrenheit_to_celsius($fahrenheit) . "degress celsius" 
?>

1-a
2-a
3-a
4-b
5-b
6-a
7-
a - d
b - b
c - a
d - e 
e - c