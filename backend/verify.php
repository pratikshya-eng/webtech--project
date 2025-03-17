<?php
include 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['token'])) {
    $token = $_GET['token'];
    $stmt = $conn->prepare("UPDATE users SET verified = 1 WHERE token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    echo json_encode(["message" => "Account verified successfully."]);
}
?>
