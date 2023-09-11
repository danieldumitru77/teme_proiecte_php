<?php  

function showRomb($n){
    for($i=0;$i<=$n;$i++){  
        for($k=$n;$k>=$i+1;$k--){  
            echo "&nbsp;&nbsp;";
        }  
        for($j=1;$j<=$i;$j++){  
            echo " * " . "&nbsp;";  
        }  
    echo "<br>";  
    }  
    for($i=$n-1;$i>=1;$i--){  
        for($k=$n-1;$k>=$i;$k--){  
            echo "&nbsp;&nbsp;";  
        }  
        for($j=1;$j<=$i;$j++){  
        echo " * "."&nbsp;" ;  
        }  
        echo "<br>";  
        }  
}
echo showRomb(7); 




?>  