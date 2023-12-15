<?php

$email = $_POST["email"];
$token = bin2hex(random_bytes(16));
$token_hash = hash("sha256", $token);
$expiry = date("Y-m-d H:i:s", time() + 60 * 30);
$conn = require __DIR__ . "/config.php";
$sql = "UPDATE users_data
        SET reset_token_hash = ?,
            reset_token_expire_at = ?
        WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $token_hash, $expiry, $email);
$stmt->execute();
if ($conn->affected_rows) {
    $mail = require __DIR__ . "/mailer.php";
    $mail->setFrom("noreply@example.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END
    Click <a href="http://localhost:8080/Teme_exercitii_php/teme_proiecte_php/cursPHP/BazaDateFormularhtml/php_crud/reset-password.php?token=$token">here</a> 
    to reset your password.
    END;
    try {
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
    }
}


echo "Message sent, please check your inbox.";