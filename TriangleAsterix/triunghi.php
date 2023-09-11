<?php
function showTriangle($n){
    //luam un for pt linie si un for pt coloana 
    
    for ($i=0;$i<=$n;$i++){
        for($j=1;$j<=$i;$j++){
            echo "* ";
        }

     echo "<br>";
    } 
}

echo showTriangle(7);

?>