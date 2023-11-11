<?php
require_once "config.php";

$name =$conn->real_escape_string($_POST['name']);
$comment =$conn->real_escape_string($_POST['comment']);

$sql ="INSERT INTO Comments (name, comment) VALUES('$name','$comment')";

if($conn->query($sql) ===TRUE){
    echo "Comentariu adaugat cu succes!";
}else{
    echo "Eroare" . $sql ."<br>" , $conn->error;
}



?>

<form method="post" action="">
    Name : <input type="text" name="name"> <br>
    Comentariu : <textarea name="comment"> </textarea> <br>
    <input type="submit" value="Adauga mesaj">

</form>