<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="mydatabase";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Conectiune esuata". $conn->connect_error);
    }
    
    return $conn;

?>