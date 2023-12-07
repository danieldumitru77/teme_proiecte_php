

<?php

include "config.php";

    if (isset($_POST['update'])) {

        $username = $_POST['username'];

        $user_id = $_POST['user_id'];

        $email = $_POST['email'];

        $password = $_POST['password'];

        $age = $_POST['age']; 

        $sql = "UPDATE `users_data` SET `username`='$username',`email`='$email',`password`='$password',`age`='$age' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";
            header("location:view.php");

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `users_data` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $username = $row['username'];

            $email = $row['email'];

            $password  = $row['password'];

            $age = $row['age'];

            $id = $row['id'];

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
              input[type="text"],input[type="password"],input[type="email"],input[type="number"]{
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

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            Username:<br>

            <input type="text" name="username" value="<?php echo $username; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            

            Password:<br>

            <input type="password" name="password" value="<?php echo $password; ?>">

            <br>

            <br>

            <input type="number" name="age" value="<?php echo $age; ?>">

            <br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 