


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Obtain data from the form
  $localhost = $_POST["localhost"];
  $dbName = trim($_POST["dbName"]);
  $username = $_POST["username"];
  $password = $_POST["password"];
  //preluam datele din formular
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];

  // Connect to the MySQL server
  $conn = new mysqli($localhost, $username, $password);

  // Check the connection
  if ($conn->connect_error) {
      die("Connection failed! " . $conn->connect_error);
  }

  // Create the database
  $sql = "CREATE DATABASE `$dbName`";

  executeQuery($conn, $sql, "Database created successfully");

  // Select the database
  $conn->select_db($dbName);

  // Create the 'users' table
  $sql = "CREATE TABLE users( 
      id INT(6) AUTO_INCREMENT PRIMARY KEY,
      utilizator VARCHAR(60) NOT NULL,
      parola VARCHAR(255) NOT NULL,
      email VARCHAR(255) NOT NULL,
      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  executeQuery($conn, $sql, "Table created successfully 1");
 

$sql = "CREATE TABLE Contact (
  id_contact INT AUTO_INCREMENT PRIMARY KEY,
  nume_contact VARCHAR(255),
  subiect_contact VARCHAR(255),
  email_contact VARCHAR(255),
  data_trimitere_contact TIMESTAMP
)";

executeQuery($conn, $sql, "Table created successfully 2");

$sql = "CREATE TABLE Studenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    password VARCHAR(255),
    email VARCHAR(255),
    photo VARCHAR(255),
    reg_date TIMESTAMP,
    friends INT,
    course INT
)";

executeQuery($conn, $sql, "Table created successfully 3");


$sql = "CREATE TABLE Plati (
id_plati INT AUTO_INCREMENT PRIMARY KEY,
    metoda_plata ENUM('paypal', 'revolut', 'bt'),
    reg_plata TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('in curs de plata', 'platit', 'plata_respinsa', 'plata_acceptata', 'plata_in_curs_de_verificare')
)";

executeQuery($conn, $sql, "Table created successfully 4");


$sql = "CREATE TABLE Videoclipuri (
  id_video INT AUTO_INCREMENT PRIMARY KEY,
  nume_video VARCHAR(255),
  link_video VARCHAR(255)
)";

executeQuery($conn, $sql, "Table created successfully 6");

$sql = "CREATE TABLE Staff (
  id_admin INT AUTO_INCREMENT PRIMARY KEY,
  permisiuni ENUM('all', 'moderat', 'slab')
)";
executeQuery($conn, $sql, "Table created successfully 7");

$sql = "CREATE TABLE Cursuri (
  id_curs INT AUTO_INCREMENT PRIMARY KEY,
  nume_curs VARCHAR(255),
  pret_curs DECIMAL(10, 2),
  descriere_curs TEXT,
  poza_curs VARCHAR(255),
  instructor_curs VARCHAR(255),
  ora_curs TIME,
  data_curs DATE,
  sfarsit_curs DATE
)";

executeQuery($conn, $sql, "Table created successfully 8");



} else {
  echo "Data was not entered correctly";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

//CREATE ... CRUD
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
//executam interogarea
$sql = "INSERT INTO studenti(first_name,last_name,email) VALUES('$first_name','$last_name','$email')";

if ($conn->query($sql) === TRUE) {
  echo "Student adăugat cu succes!";
} else {
  echo "Eroare: " . $conn->error;
}

//READ ... CRUD

$sql = "SELECT * FROM Studenti";
$result = $conn->query($sql);

if($result->num_rows >0){
  while ($row = $result->fetch_assoc()){
    echo "<br>" ."ID:" . $row["id"] . "- Nume: " . $row["first_name"] . " " .$row["last_name"] . " - Email " . $row["email"] . "<br>";
  }
}else{
  echo "Niciun student gasit";
}

//UPDATE
$sql = "UPDATE studenti SET email ='marianpop77@hahu.com' WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "UPDATE SUCCES";
} else {
  echo "Eroare: " . $conn->error;
}


//DELETE

$sql = "DELETE FROM Studenti WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "DELETE succes";
} else {
  echo "Eroare: " . $conn->error;
}



$conn->close();

}




function executeQuery($conn, $sql, $successMessage)
{
  if ($conn->multi_query($sql) === TRUE) {
      echo $successMessage . '<br>';
  } else {
      echo "Error: " . $conn->error . '<br>';
  }
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
              input[type="text"],input[type="password"]{
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
   


    <body>
        <h2>Conectare baza de date</h2>

        <form action="" method="post">

            <label for="localhost">Localhost</label>
            <input type="text" name="localhost" id="localhost"> <br>
            <label for="dbName">Nume baza de date </label>
            <input type="text" name ="dbName" id="dbName"> <br>
            <label for="username">Nume utilizator</label> 
            <input type="text" name="username" id="username" value="root"> <br>
            <label for="password">Parola DB</label>
            <input type="text" name="password" id="password"> <br>
            
            <label for="first_name">Prenume:</label>
            <input type="text" name="first_name" required><br>
             
            <label for="last_name">Prenume:</label>
            <input type="text" name="last_name" required><br>

            <label for="email">Email:</label>
            <input type="text" name="email" required><br>

            <input type="submit" value="Conectare"> <br>
         </form>
         
            
  

    </body>
 
</html>

