<?php
include 'database.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password, verified FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        if ($user['verified'] == 1) {
            $_SESSION['user_id'] = $user['id'];
            echo json_encode(["message" => "Login successful", "user_id" => $user['id']]);
        } else {
            echo json_encode(["error" => "Please verify your email first."]);
        }
    } else {
        echo json_encode(["error" => "Invalid credentials."]);
    }
}
?>
