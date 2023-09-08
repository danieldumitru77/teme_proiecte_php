<?php
try{
	$x=true;
	checkFunction($x);
	echo "Variable x is numeric";
	
}catch(Exception $e) {
	echo "Message" . $e->getMessage();
}

function checkFunction($number){
	if(!is_numeric($number)){
		throw new Exception("Value must be a number!");
	}
    return true;	
	
}

?>