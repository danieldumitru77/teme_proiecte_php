<?php

    include "config.php";
  

    $sql = "SELECT * FROM users_data";
    $result = $conn->query($sql);

?>


<!DOCTYPE html>
<html>
    <head>
        <title>View Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

<body>
<div class="nav">
    

        <div class="right-links">

        
            <a href="index.php"> <button class="btn">Log In</button> </a>
            <a href="logout.php"> <button class="btn">Log Out</button> </a>

        </div>
    </div>

    <div class="container">
        <h2>Users</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th> <th>Username</th><th>Email</th><th>Password</th> <th>Age</th>
            </tr>
            <tbody>
                <?php
                   if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){                 
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td> <td><?php echo $row['username']; ?></td> <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td> <td><?php echo $row['age']; ?></td>
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>   

                <?php
                    }
                }
 
                ?>
            </tbody>
        </thead>
    </table>

    </div>

</body>

</html>