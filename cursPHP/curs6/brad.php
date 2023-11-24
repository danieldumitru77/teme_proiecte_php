<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .instalatie{
            color:red;
            animation-name : instalatie;
            animation-duration :4s;
            animation-iteration-count : infinite;

        }

        @keyframes instalatie {

            0%  {color:red; }
            25% {color:yellow; }
            50%  {color:blue; }
            75% {color:aquamarine; }
            100% {color:orange; }
        
        }

        .instalatie1{

            color:red;
            animation-name : instalatie1;
            animation-duration :5s;
            animation-iteration-count : infinite;

        }


        @keyframes instalatie1 {

            0%  {color:red; }
            50% {color:orange; }  
            100% {color:blue; }
        
        }

    </style>
</head>

<body>







<?php
$a = 34; //numar de linii , ianltimea bradului
$b = 6; // numarul de linii pentru triunghi 
$c = 13; //$c si $x vor stabili cat de des apar decorat
$brad = "<div style='font-family:monospace; text-align:center'> " ;
$w = 1; //numarul ce va determina lungimea unei linii
$x=0;
$y="|#|<br>";

for ($i = 1; $i < $a; $i++){
 
    for( $j = 0 ; $j < $w; $j++ ){
        if($x % $c == 0){
           $brad .= "<span class='instalatie'>O</span>";
        }elseif($x % $c == 2){
            $brad .= "<span class='instalatie1'>@</span>";
        } else {
            $brad .="+";
        }
        $x++;
    }
    $i % $b == 0 ? $w -= 4 : $w += 2;
    $brad .= "<br>";
}
echo $brad . "<span style='color:#640;text-shadow:2px 2px'>$y$y$y$y</span>";

?>

    
</body>
</html>