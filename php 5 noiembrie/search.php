<?php
require_once "config.php";

//preluam termenul cautat din formular

$nume_cautat =$conn->real_escape_string($_POST['nume_cautat']);

//creare inteRealizati CV dvs cu urmatoarele : Obiectivele voastre in acest curs si proiectele pe care o sa le finalizati ( faceti voi nu va dau eu proiect individual) cu nume si descriere iar la final a da si inca un docx pentru ce va motovează sa invatatirogare SQL

$sql ="SELECT * FROM Utilizatori WHERE name LIKE'%$nume_cautat' ";

$result = $conn->query($sql);
//afisare rezultate


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

<form method="post">
    Nume : <input type="text" name="nume_cautat"><br>
    <input type="submit" value ="Cauta">
</form>

