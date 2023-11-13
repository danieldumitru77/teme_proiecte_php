<?php
    require_once "config.php";
    
    $id = (int)$_GET['id'];  
    $sql = "DELETE FROM Cart WHERE id = $id";
    $result = $conn->query($sql);

    if($result === TRUE) {
        header("cos.php");
    }else{
        echo "Eroare" . $sql . "<br>" . $conn->error;
    }
    $conn->close();    

?>
