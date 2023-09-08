<?php

$books = array(
	array("Alice in Wonderland",12.50,150),
	array("The Adventure of Tom Sawyer",11.25,73),
	array("The Jungle Book",15.00,35)
);
/*
echo "<h1> Manual access each element </h1> ";
echo $books[0][0] . " costs " . $books[0][1] . "$" . "  In stock we have " . $books[0][2] . " books" ;
echo "<br>" . $books[1][0] . " costs " . $books[1][1] . "$" . "  In stock we have " . $books[1][2] . " books" ;
echo "<br>" .$books[2][0] . " costs " . $books[2][1] . "$" . "  In stock we have " . $books[2][2] ;
*/
echo "<h1>Using loops to display array elements </h1>";
echo "<ol>";
for($row=0; $row<count($books); $row++){
	
	echo "<li><b>The row numaber $row </b>";
	echo"<ul>";
	for($col=0; $col<count($books); $col++){
		echo "<li>" . $books[$row][$col] . "</li>"; 
	}
	echo "</ul>";
	echo "</li>";
	
}
echo "</ol>";



?>
