
<?php
$conn = new mysqli('localhost','root','','new');

//verificare
if($conn->connect_error){
    die("Conexiune esuata! ".$conn->connect_error);
}
//tabelul users
$sql = "CREATE TABLE IF NOT EXISTS Utilizatori( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255)
)";
if ($conn->query($sql) === TRUE){
    echo "Tabel creat cu succes!";
}else{
    echo "Eroare : ". $conn->error;
}

?>