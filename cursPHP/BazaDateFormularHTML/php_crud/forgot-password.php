<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Forgot Password</title></title>
</head>
<body>

      <div class="container">
        <div class="box form-box">
          
            <header>Forgot Password</header>
            <form action="send-password.php" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field">
                    <button >Send</button>
                    
                </div>
                
            </form>
        </div>

      </div>
</body>
</html>