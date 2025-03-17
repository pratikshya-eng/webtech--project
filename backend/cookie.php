<?php
// Start session (optional, if you are using sessions)
session_start();

// Set a cookie (Valid for 1 hour)
setcookie("user_id", "12345", time() + 3600, "/"); 

// Read the cookie
$user_id = isset($_COOKIE["user_id"]) ? $_COOKIE["user_id"] : "No cookie found";

// Delete the cookie (Set expiry time in the past)
if (isset($_GET['delete'])) {
    setcookie("user_id", "", time() - 3600, "/");
    $user_id = "Cookie deleted!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        button {
            padding: 10px 15px;
            background-color: rosybrown;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <h1>PHP Cookie Example</h1>
    
    <p><strong>Cookie Value:</strong> <?php echo $user_id; ?></p>
    
    <button onclick="window.location.href='cookie.php'">Refresh Page</button>
    <button onclick="window.location.href='cookie.php?delete=1'">Delete Cookie</button>

</body>
</html>
