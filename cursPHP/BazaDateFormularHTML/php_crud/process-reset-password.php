<?php

$token = $_POST["token"];

$token_hash = hash("sha256", $token);

$mysqli = require __DIR__ . "/config.php";


$sql = "SELECT * FROM users_data
        WHERE reset_token_hash = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();





$sql = "UPDATE users_data
        SET password = ?,
            reset_token_hash = NULL,
            reset_token_expire_at = NULL
        WHERE id = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("ss", $password, $user["id"]);

$stmt->execute();

echo "Password updated. You can now login.";