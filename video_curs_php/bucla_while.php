<?php


/*
$i=0;
while($i<10) {
	echo $i . "<br>";
	$i++;
   
}
*/

/*do {
echo $i . "   <br>";
	$i++;

}
while($i>10)	;

echo $i;
*/

$price=4;
$quantity=10;
echo "<table border='1'";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";


while($quantity <= 100){
	
	echo "<tr><td>";
	echo $quantity;
	echo "</td><td>";
	echo $price * $quantity;
	echo "</td></tr>";
    $quantity=$quantity + 10;
}

echo "</table>"


?>