<?php
require_once "config.php";
//prelucram datele din formular

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);

$sql = "INSERT INTO Utilizatori (name, email) VALUES ('$name','$email')";


if ($conn->query($sql) === TRUE){
    echo "Inserarea cu succes!";
}else{
    echo "Eroare la inserare: ". $conn->error;
}
?>

<form method="post" action="">
    Name : <input type="text" name="name"> <br/>
    Email : <input type="email" name="email"> <br/>
    <input type="submit" value="Inserare">

</form>