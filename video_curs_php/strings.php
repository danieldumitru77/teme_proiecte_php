<?php

$status = "admi";

$numbers= array(
				"012 256 365", 		
				"012 256 365",
				"012 256 365",
				"012 256 365",
				"012 256 365",
				"012 256 365",
				"012 256 365",
				"012 256 365",
				);

if($status === "admin"){
	
	foreach ($numbers as $index => $value) {
		echo "Number " . $index . " : " . $value . "<br>";  
	}
} else {
	/*foreach ($numbers as $index => $value){
		//primul parametru variabila $value pe care o manipulam , 
		//al doilea parametrul stringul pe care vrem sa il inseram
		//al 3 lea parametru  4 - indexul de inceput si
        // 	                  5 - nr de pozitii pe care le modifica , nr si spatiile
		$value =substr_replace($value,"*** *",4,5);
		echo "Number " . $index . " : " . $value . "<br>"; 
	}
	*/
	//trecem prin toate numerele si le implementam ca index , valoare
	foreach ($numbers as $index => $value){
			
			$num="";
			for($i=0; $i < strlen($value); $i++){
				
				if($i>3 && $i<strlen($value)-2){
					$num.="*";
					
				}else {
					$num .=$value[$i];
				}
			}
		echo "Number" . $index . " : " . $num . "<br>";
	}
	
}

?>