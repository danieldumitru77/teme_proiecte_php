<?php



function calculator_operations($nr1, $nr2, $operator) {
   //folosim switch pentru alegerea operatorului
    switch($operator) {
      
	  case '+':
            $rezultat = $nr1 + $nr2;
            break;
        case '-':
            $rezultat = $nr1 - $nr2;
            break;
        case '%':
            $rezultat = $nr1 % $nr2;
            break;
        case '/':
            
			if($nr2==0){
				$rezultat="&#8734";
			}else{
				$rezultat=$nr1 / $nr2;
			}
            break;
		case '^': 
		    $rezultat=pow($nr1,$nr2) ; 
            	
    } 
    //returnam rezultatul in functie de operatorul selectat 
    return $rezultat;
}

//declaram variabilele
$nr1 = 0;
$nr2 = 0;
$rezultat='';
$operator ='';

//contine parametrii trimisi prin URL
extract($_GET);


?>
 <html>

  <head>
    <title> Tema Calculator  Variabile si operatori </title>
  </head>

  <body>

    <h3> Calculator </h3>
	
     <!--folosim get pentru a lua parametrii trimisi prin URL--> 
    <form method="get" action="#">
          
		numarul1 = <input style="margin-bottom:10px" type="number" name="nr1"  value="<?php print $nr1; ?>" /> <br>
		operator = <select style="margin-bottom:10px; " name="operator">
	            <!-- am pus selected pe operator pt a ramane selectat
				dupa afisarea rezultatului ,altfel ramane selectat operatorul 
				default care e "+" in cazul nostru-->
                <option value="+" <?php if($operator=='+') echo 'selected="selected"'?> >+</option>
                <option value="-" <?php if($operator=='-') echo 'selected="selected"'?> >-</option>
                <option value="%" <?php if($operator=='%') echo 'selected="selected"'?> >%</option>
                <option value="/" <?php if($operator=='/') echo 'selected="selected"'?> >/</option>
 				<option value="^" <?php if($operator=='^') echo 'selected="selected"'?> >^</option> 
            </select><br> 
		numarul2 = <input type="number" name="nr2" value="<?php  print $nr2; ?>" /> 
      
		<input type="submit" name="calculator" value="Calculate" />
    </form>

   <?php
        if(isset($calculator)) {
			//if pentr a verifica daca valorile introduse sunt numerice
            if (is_numeric($nr1) && is_numeric($nr2) ) {
                    //apelam metoda pentru a generra rezultatul
                    $rezultat = calculator_operations($nr1, $nr2, $operator);
                    //se va afisa rezultatul daca valorile sunt numerice
                 echo "<div>
						<p style='color:green';>Rezultatul calcului : {$nr1} {$operator} {$nr2} = {$rezultat}</p>
					  <div>";
				                   
                }
               
            else {
                //daca valorile nu sunt numerice se va afisa mesajul din div 
                echo "<div>
						<p style='color:red';>nr1, nr2  trebuie sa fie numerice ,
						introduceti alte valori</p>
					  <div>";
            }
        }
          
        
    ?>
  </body>
  </html>