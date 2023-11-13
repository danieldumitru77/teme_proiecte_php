<?php
require_once "config.php";
/*
CREATE TABLE Rezervations (
    id INT auto_increment primary key,
    name VARCHAR(255),
    email varchar(255),
    phone varchar(255),
    rezervation_date DATE,
    rezervation_time TIME,
    number_of_people INT,
    special_requests TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
*/
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $rezervation_date = $conn->real_escape_string($_POST['rezervation_date']);
    $rezervation_time = $conn->real_escape_string($_POST['rezervation_time']);
    $number_of_people = $conn->real_escape_string($_POST['number_of_people']);
    $special_requests = $conn->real_escape_string($_POST['special_requests']);
    
    $sql = "INSERT INTO Rezervations (name, email, phone, rezervation_date, rezervation_time,number_of_people,special_requests)
    VALUES ('$name','$email','$phone','$rezervation_date','$rezervation_time','$number_of_people','$special_requests')";

    if($conn->query($sql) === TRUE) {
        echo "Produsul a fost adaugat cu bine!";
    }else{
        echo "EROARE" . $sql . "<br>" . $conn->error;
    }
    

?>

<form method="post" action="">
    Nume : <input type="text" name="name"><br>
    Email : <input type="email" name="email"><br>
    Telefon : <input type="text" name="phone"><br>
    Data rezervarii : <input type="date" name="rezervation_date"><br>
    Ora Rezervarii : <input type="time" name="rezervation_time"><br>
    Numar persoane : <input type="number" name="number_of_people"><br>
    Cerinte Speciale : <textarea  name="special_requests"></textarea> <br>
    <input type="submit" value="Rezervarea">

</form>