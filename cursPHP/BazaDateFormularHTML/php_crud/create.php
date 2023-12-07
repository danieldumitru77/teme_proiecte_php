
<?php
include "config.php";

// Display existing last names from the database
/*
$result = $conn->query("SELECT last_name FROM users");
if ($result->num_rows > 0) {
    echo "<h2>Existing Last Names in Database:</h2>";
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["last_name"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No last names found in the database.";
}
*/

if(isset($_POST['submit'])){
    /*echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    */
    //luam datele din formular
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];    
    //facem un query INSERT pentru a insera un rand nou
    $sql = "INSERT INTO users (first_name,last_name,email,password,gender) VALUES('$firstname','$lastname','$email','$password','$gender')";
    //echo '<br>'.$sql;
    if ($conn->query($sql) === TRUE) {
        echo "Update cu succes!";
    } else {
        echo "Errror" .$sql ."<br> "." $conn->error";
    }

  $conn->error;
} else {
    echo "Form not submitted";
}

?>

<!DOCTYPE html>
<html lang="ro">
    <head>
        <style>
              body {
                font-family :Arial sans-serif;
                background-color: #f4f4f4;
                padding:20px;
              }  
              form{
                background-color:white;
                padding:20px;
                border-radius:8px;
                box-shadow:0 0 10px rgba(0,0,0,0.1);
                max-width:500px; 
                margin:auto;
              } 
              
              label{
                display: block;
                margin-bottom:5px;
                font-weight:bold;

              }
              input[type="text"],input[type="password"],input[type="email"]{
                width:100%;
                padding:5px;
                margin-bottom:10px;          
                border:1px solid green;
                border-radius:4px;
              }
            
              input[type="submit"]{
                background-color:#008CBA;
                color:white;                
                padding:10px 20px;
                border:none;
                border-radius:4px;
                cursor:pointer;
              }
              
              input[type="submit"]:hover{
                background-color:#005f5f;;
                
              }

        </style>
         
    </head>
   
    <!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

    First name:<br>
     <input type="text" name="firstname">
    <br>
    Last name:<br>
    <input type="text" name="lastname">
    <br>
    Email:<br>
    <input type="email" name="email">
    <br>
    Password:<br>
    <input type="password" name="password">
    <br>
    Gender:<br>
     <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br><br>
    <input type="submit" name="submit" value="submit"> 

</form>

</body>

</html>
 
</html>

