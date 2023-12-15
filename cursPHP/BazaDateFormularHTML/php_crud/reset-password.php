<?php

$token = $_GET["token"];
$token_hash = hash("sha256",$token);
$conn = require __DIR__ . "/config.php";

$sql = "SELECT * FROM users_data 
        WHERE reset_token_hash = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("s",$token_hash);

$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if($user === null) {
    die("token not found");
}
if(strtotime($user["reset_token_expire_at"])<= time()) {
    die("token has expired");
}

echo "token is valid and hasn't expired";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>

    <h1>Reset Password</h1>

    <form method="post" action="process-reset-password.php">

        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">

        <label for="password">New password</label>
        <input type="password" id="password" name="password">

        <label for="password_confirmation">Repeat password</label>
        <input type="password" id="password_confirmation"
               name="password_confirmation">

        <button>Send</button>
    </form>

</body>
</html>