<?php
/*
assigment operators 

	x ** y  10**2 = 10 *10 = 100

comparison operators

	== 		Equal 
	=== 	Identical
	!=		Not Equal
	<>		Not Equal
	!== 	Not Identical
	>		Greather  than
	<		Less than
	>=		Greather than or equal to
	<=		Less than or equal to 

*/
$x="10";
$y=10;
var_dump($x===$y);
var_dump($x=="10");


/*
string operators

.  concatenation
.= concatenation assigment
*/
$text1 = "Hello";
$number =15;
$text3=$text1 . $number;

echo "<br>" . $text3;

$r=10;
define("PI",3.14);

$surface=PI*$r*$r;

echo "<br>" . $surface;




?>