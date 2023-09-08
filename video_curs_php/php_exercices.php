<?php
function swapNr($a,$b){
	
	$temp = $a;
	$a=$b;
	$b=$temp;
 	echo "a=$a b=$b";
}
swapNr(9,2);
?>