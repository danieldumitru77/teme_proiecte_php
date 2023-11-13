<?php
    require_once "config.php";

    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity']; 

    $sql = "INSERT INTO Cart (product_id, quantity) VALUES ($product_id, $quantity)";

    if($conn->query($sql) === TRUE) {
        echo "Produsul a fost adaugat cu bine!";
    }else{
        echo "EROARE" . $sql . "<br>" . $conn->error;
    }
    


?>    

<form method="post" action="">
    Product ID <input type="number" name="product_id"><br>
    Quantity <input type="number" name="quantity"><br>
    <input type="submit" value="Adauga in cos">
     

</form>



   
    