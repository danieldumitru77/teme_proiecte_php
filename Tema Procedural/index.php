<?php
// 1. Declarați o variabilă și atribuiți-i o valoare.
$a=10;
if ($a > 10){
    echo "true";
} else {
    echo "Not";
}

//2. Declarați o constantă și atribuiți-i o valoare
define ("MY_CONSTANT",14);
echo "<br>". MY_CONSTANT;

//3. Creați o funcție care primește un număr ca argument și returnează dublul acestuia.
function dubleazaNr( $nr){
    return pow($nr,2);
}
echo "<br>".dubleazaNr(3);
//4. Creați o funcție anonimă care afișează un mesaj
$afiseazaMesaj = function ($message){
 
    echo "<br>" .$message;
};
$message = "Mare este EL";
$afiseazaMesaj($message);

//5. Declarați o matrice (array) cu câteva elemente și afișați conținutul acesteia

$array = array(12,14,15,33,7,15,1,22,40);
echo "<pre>";
print_r($array);

//6. Folosiți o buclă "foreach" pentru a parcurge și afișa elementele unei matrice
$array = array(12,14,15,33,7,15,1,22,40);

foreach ($array as $key => $value){
    echo $key . "=>". $value . "<br>";
}
//7. Creați o funcție care adaugă un element la sfârșitul unei matrice
$adaugaLaSf = function (&$array , $element){
    array_push ($array ,$element);
};

$array = array(1,4,2,10,7,5);
$adaugaLaSf($array,10);
print_r ($array);

//8. Creați o funcție care primește o matrice și returnează numărul de elemente din aceasta
function elementeArray ($array){
    echo count($array);

}
print_r ($array);
elementeArray($array);

//9. Folosiți funcția "array_map" pentru a aplica o funcție asupra fiecărui element al unei matrice.
function dubleazaNumar($nr){
    return $nr * 2 ;
}
$arrayDublat = array_map('dubleazaNumar',$array);
echo "<br>";
print_r($arrayDublat);

//10. Declarați un șir de caractere și afișați-l.Folosiți funcția "strlen" pentru a obține lungimea unui șir de caractere
$sir = "Mesajul meu pentru voi. ";
echo $sir;
echo  "Lungimea sirului:" .strlen($sir);

//11. Creați o funcție care concatenează două șiruri de caractere
function concatenare ($string1 , $string2){
    echo $string1 . $string2;
}

echo "<br>";
concatenare("Ma numesc :","Dumitru Daniel Silviu");
//12 Declarați o variabilă care conține o adresă de e-mail și verificați folosind o expresie regulată dacă este o adresă de e-mail validă
$email = "daniel@yahoo.com";
$checkValidity = filter_var($email,FILTER_VALIDATE_EMAIL) ? "Adresa este valida " : "Nu este valida";
echo "<br>".$checkValidity;


//13. Creați o funcție care primește un șir de caractere și îl transformă în litere mari
function transformaMare($sir){
   return strtoupper($sir);
} 

echo transformaMare("marcel");

//14. Declarați o matrice asociativă cu câteva perechi cheie-valoare și afișați valoarea asociată unei chei specifice.

$matriceAsociativa = [
     "nume" => "Dumitru Daniel",
     "oras" => "Bistrita",
     "varsta" => "26"
];

echo $matriceAsociativa["nume"];

//15. Creați o funcție care primește o matrice asociativă și returnează toate cheile acesteia.
echo "<br>";
function keyMatrix($matriceAsociativa){
  foreach($matriceAsociativa as $key => $value){
    echo $key . " ";
  }
}
keyMatrix($matriceAsociativa);

//16. Folosiți o instrucțiune "if" pentru a verifica dacă o cheie există într-o matrice asociativă

if(array_key_exists("nume",$matriceAsociativa)){
    echo "key exists";

} else {
    echo "key not exists";
}

//17. Creați o constantă care conține o valoare numerică și utilizați-o într-o instrucțiune "switch" pentru a afișa un mesaj corespunzător valorii constantei
define ("MY_CONSTANTA",1);

switch(MY_CONSTANTA){
    case "1":
        echo "Valoarea este 1"."<br>";
        break;
    case 2:
        echo "Valoarea este 2";
        break;
    case 3:
        echo "Valoarea este 3";
        break;
    default:
        echo "Introduceti alta valoare";            
}

//18. Declarați o funcție care primește trei argumente și returnează suma lor.
$sumaNr = function($a,$b,$c) {
 return $a+$b+$c;
};

echo "Suma numerelor este: " . $sumaNr(5,4,2);

//19. Creați o funcție care primește un număr și verifică dacă este par sau impar.
function checkPar ($nr){
    if($nr % 2 == 0 ){
        return "Par";
    }else {
        return "Nu e par" ;
    }
}
echo "<br>".checkPar(14);

//20. Folosiți funcția "array_filter" pentru a filtra elementele pare dintr-o matrice de numere întregi
function verificaParitate($nr){
    return $nr %2 === 0;
}

$elementePare = array_filter($array,'verificaParitate');
print_r($elementePare);

//21. Declarați un șir de caractere și verificați dacă acesta conține o anumită subșir
$sir = "Mare este El! Aleluia!";
$subsir = "Mare";
$verifySubsir = strpos($sir , $subsir) !== false ? "Sirul contine subsirul $subsir" : "Sirul NU contine subsirul $subsir";
echo $verifySubsir;

//22. Creați o funcție care primește un șir de caractere și elimină spațiile albe din început și sfârșit
$string = "     Maine este o noua zi buna    ";
echo "<br>".$string;
$wegSpaces = function($string){
  return  trim($string);
} ;

echo "<br>" . $wegSpaces($string);
           //am pus un sir pt a vedea ca spatiile de la final sau eliminat

echo "Mesaj de final";

 //23. Declarați o variabilă care conține un număr și verificați dacă acesta este întreg sau zecimal
function checkIntregZecimal($nr){
   if(is_int($nr)){
    echo "Numarul $nr este intreg.";
   } else {
    echo "Numarul $nr nu este intreg";
   }

   if(is_float($nr)){
    echo "Numarul $nr este zecimal";
   }else {
    echo "Numarul $nr nu este zecimal";
   }

}
echo "<br>";
checkIntregZecimal(14.5);




//24. Creați o funcție care primește un număr și returnează valoarea absolută a acestuia

function valoareaAbsoluta($nr){
    return abs($nr);
}

$nr=-10;
echo "Valoarea absoluta a lui $nr este " . valoareaAbsoluta($nr);

//25.  Folosiți funcția "array_reduce" pentru a calcula suma elementelor unei matrice
$array = [10,5,1,7,15,25];

function sumaMatrice($array){ 
    //$carry (valoarea acumulată) și $item (elementul curent din matrice).
    return array_reduce($array,function($carry,$item){
        return $carry + $item;
     }, 0);
}

echo  "<br>" . " Suma elementelor este " . sumaMatrice($array);

//26. Declarați o funcție care primește un șir de caractere și îl inversează
function revertString($string){
    $lungime = strlen($string);
    $stringInversat = '';

    for($i=$lungime - 1; $i >=0; $i--){
        $stringInversat .= $string[$i];
    }
    return $stringInversat;

}

$str = " Aceasta este o masina neagra : Mercedes.";
$sirinversat=revertString($str);
echo "<br>" . $sirinversat;
//27 . .Creați o funcție care primește un număr și returnează un mesaj "Par" sau "Impar" în funcție de paritatea numărului.


function verificaParitatee ($numar) {
    if ($numar % 2 === 0) {
          return "Par";
    } else {
         return "Impar";
    }
}


$numar = 14;
echo "<br>"."$numar este un număr " . verificaParitatee($numar);
?>

