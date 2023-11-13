<?php

require_once "config.php";

    $sql = "SELECT * FROM Comments ORDER BY posted_at DESC";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result -> fetch_assoc()){
            echo "<p><strong>" . $row['name'] ."</strong></p>" .$row['comment'] ."</p><hr>";
        }
    }else{
            echo "Nu exista mesaje";
    }
    
    $conn->close();
?>