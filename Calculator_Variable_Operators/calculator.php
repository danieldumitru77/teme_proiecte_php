<?php

function calculate_operation($nr1,$nr2,$operator){
//folosim switch pentru alegerea operatorului
    $nederminata="Ø";
	switch($operator){
		case '+':
			$rezultat = $nr1 + $nr2;
			break;
		case '-':
			$rezultat = $nr1 - $nr2;
			break;
		
		case '%':
			if($nr2 == 0){
				echo "Nu se poate face modulo cu divizorul 0";
				$rezultat=$nederminata;
			}else {
				$rezultat = $nr1 % $nr2;
			}
			break;
		
		case '/':
			if($nr2 == 0)
			{  // rezultat = infinit
				$rezultat="&#8734";
			} else {
				$rezultat = $nr1 / $nr2;
			}
	
			break;
		
		case '^':
		
			$rezultat=$nr1 ** $nr2;
			break;
	
	}
	    //returnam rezultatul in functie de operatorul selectat 
    return $rezultat;	
}
//declaram variabilele

$nr1 = 0;
$nr2 = 0;
$rezultat = '';
$operator = '';

//contine parametrii trimisi prin URL
extract($_GET);

?>

<html>
	
	<head>
		<title> Calculator </title>
	</head>	
	<body>
		<h3>Calculator</h3>
		<form method="get" action="#">
            
			Numarul1 = <input style="margin-bottom:10px" 
			type="number" name="nr1" value="<?php print $nr1; ?>" > <br>
			Operator =  <select style="margin-bottom:10px" name="operator">
							<option value="+" <?php if($operator == '+') echo 'selected="selected"' ?> > + </option>
							<option value="-" <?php if($operator == '-') echo 'selected="selected"' ?> > -</option>
							<option value="%" <?php if($operator == '%') echo 'selected="selected"' ?> > %</option>
							<option value="/"<?php if($operator == '/') echo 'selected="selected"' ?> > /</option>
							<option value="^"<?php if($operator == '^') echo 'selected="selected"' ?> > ^</option>
						</select> <br>
			Numarul2 = <input  style="margin-bottom:10px"
			type="number" name="nr2" value="<?php print $nr2; ?>" >				
			
			<input type="submit" name="calculator" value="Calculate">
		</form>
        <?php
		 if(isset($calculator)) 
		 {
			if(is_numeric($nr1) && is_numeric($nr2)){
				
			  $rezultat = calculate_operation($nr1,$nr2,$operator);	
			  echo "<div>
						<p style='color:green';>Rezultatul calcului :
						{$nr1}{$operator}{$nr2} ={$rezultat} </p>
			        </div>";
			}else{
			  echo "<div>
						<p style='color:red'; > nr1 si nr3 trebuie sa fie numerice ,
						 introduceti alte valori </p>
					</div>";	
			}	
		 }
			
			
        ?>		
		
	</body>
		</html>
		
	
	
	