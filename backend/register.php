<?php
include 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $token = bin2hex(random_bytes(32));
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (email, password, token, verified) VALUES (?, ?, ?, 0)");
    $stmt->bind_param("sss", $email, $hashedPassword, $token);
    $stmt->execute();
    echo json_encode(["message" => "User registered successfully. Check your email for verification."]);
}
?>
