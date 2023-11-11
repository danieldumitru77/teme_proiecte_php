<?php
require_once "config.php";
//prelucram numarul de pagini din URL sau il setam la 1 deci nu e cazul

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina']:1;
$pe_pagina = 10; //nr de inregistrari pe pagina
$start = ($pagina -  1) * $pe_pagina;


// facem o interogare
$sql ="SELECT * FROM Utilizatori LIMIT $start , $pe_pagina ";
$result = $conn -> query($sql);

//afisam inregistrarie

if($result->num_rows > 0){
   echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
   while ($row = $result->fetch_assoc()){
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] ."</td><td>". $row["email"]."</td></tr>";
   }
   echo "</table>";


}else{
    echo "0 rezultate";
}
 $conn->close();



?>

<div class="pagina">
    <a href="?pagina=1">Prima</a>
    <a href="?pagina=<?php echo max($pagina-1,1); ?> ">Anterioara</a>
    <a href="?pagina=<?php echo $pagina+1; ?> ">Urmatoarea</a>
</div>
<!--

    am incercat sa facem baza de date PHPMYADMIN in format html cu 
    pagina 1,2,3, si tot asa . sa adaugam mai multe valori pana la pag2   
-->