<?php


//daca datele in formular pt crearea bazei de date au fost introduse
if ($_SERVER["REQUEST_METHOD"]=="POST" ){
 
  $localhost = $_POST["localhost"]; 
  $databaseName = $_POST["databaseName"];
  $username = $_POST["username"];
  $password = $_POST["password"];

  //facem conexiunea la baza de date 
  $conn = new mysqli($localhost,$username,$password);

  if($conn->connect_error){
    die("Conextiune esuata" . $conn->connect_error); 
  }

  //creem baza de date daca nu exista

  $sql = "CREATE DATABASE if NOT EXISTS `$databaseName`";

  if($conn->multi_query($sql)===TRUE){
     echo "Database Succes" . '<br>';
  }else {
    echo "Error :" . $conn->error . '<br>';
  }
  
  $conn->select_db($databaseName);
  //creem tabela cantareti
  $sql = "CREATE TABLE cantareti(
     id INT AUTO_INCREMENT PRIMARY KEY,
     nume VARCHAR(50),
     prenume VARCHAR(50),
     piesa VARCHAR(255)
  )";

  if($conn->multi_query($sql)===TRUE){
    echo "TABLE Succes" . '<br>';
  }else {
    echo "Error :" . $conn->error . '<br>';
  }
    

 
  //daca datele in formular nu au fost introduse corect afiseaza mesajul
}else{
    echo "Datele nu au fost introduse corecte";
}

?>
<!DOCTYPE html>

<html >

    <head>
    
        <style>

              body {
             
                font-family :Arial ;
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

        <h2>Conectarea baza de date</h2>

        <form action="" method="post">

            <label for="localhost">Localhost</label>
            <input type="text" name="localhost" id="localhost"> <br>
            <label for="databaseName">Nume database </label>
            <input type="text" name ="databaseName" id="databaseName"> <br>
            <label for="username">Nume user</label> 
            <input type="text" name="username" id="username" value="root"> <br>
            <label for="password">Parola Database</label>
            <input type="text" name="password" id="password"> <br>
           
            
            <input type="submit" value="Conectare"><br>


         </form>
   
         
            
  

    </body>
 
</html>
