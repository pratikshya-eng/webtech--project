<?php
// resetPassword.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'database.php';

    $email = $_POST['email'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    if ($newPassword === $confirmPassword) {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET password='$hashedPassword' WHERE email='$email'";

        if ($conn->query($sql) === TRUE) {
            echo "Password reset successful!";
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "Passwords do not match!";
    }
}
?>
