<?php 
// Include your header if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #2E3A87;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        nav {
            background-color: #4B83A1;
            text-align: center;
            padding: 10px;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            color: yellow;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        form {
            width: 100%;
            max-width: 350px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #2E3A87;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #1F2B63;
        }
        footer {
            background-color: #2E3A87;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Welcome to Our E-commerce Site</h1>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="index.php">Home</a>
        <a href="ecommerce.php">Products</a>
        <a href="contact.php">Contact</a>
    </nav>

    <!-- Main Content Section -->
    <main>
        <h2>Register</h2>
        <form action="ecommerce.php" method="POST" onsubmit="return validateForm()">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="signin.php">Login Here</a></p>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Happy Bouquet Shop | All Rights Reserved</p>
    </footer>

    <script>
        // JavaScript for form validation
        function validateForm() {
            var password = document.getElementsByName("password")[0].value;
            var confirmPassword = document.getElementsByName("confirm_password")[0].value;
            
            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return false; // Prevent form submission
            }
            return true;
        }
    </script>

</body>
</html>
