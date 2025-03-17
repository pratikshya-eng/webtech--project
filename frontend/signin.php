<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In & Forgot Password</title>
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
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px;
            text-align: center;
            margin: 50px auto;
        }
        .form-box {
            display: none;
        }
        .form-box.active {
            display: block;
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
        a {
            display: block;
            margin-top: 10px;
            color: blue;
            text-decoration: none;
        }
        footer {
            background-color: #2E3A87;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
        .back-link {
            margin-top: 20px;
            font-size: 16px;
        }
        .back-link a {
            color: blue;
            text-decoration: none;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
        @media (max-width: 400px) {
            .container {
                width: 90%;
            }
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
    <div class="container">
        <!-- Sign In Form -->
        <form action="ecommerce.php" method="POST">
            <div id="signInForm" class="form-box active">
                <h2>Sign In</h2>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <button type="submit">Sign In</button>
                <a href="#" onclick="showForgotPassword()">Forgot Password?</a>
            </div>
        </form>

        <!-- Forgot Password Form -->
        <div id="forgotPasswordForm" class="form-box">
            <h2>Forgot Password</h2>
            <input type="email" id="forgotEmail" placeholder="Enter your email" required>
            <input type="password" id="newPassword" placeholder="New Password" required>
            <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
            <button onclick="resetPassword()">Reset Password</button>
            <a href="#" onclick="showSignIn()">Back to Sign In</a>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Happy Bouquet Shop | All Rights Reserved</p>
    </footer>

    <script>
        function resetPassword() {
            var newPassword = document.getElementById("newPassword").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            if (newPassword === confirmPassword) {
                alert("Password reset successful!");
            } else {
                alert("Passwords do not match!");
            }
        }

        function showForgotPassword() {
            document.getElementById("signInForm").classList.remove("active");
            document.getElementById("forgotPasswordForm").classList.add("active");
        }

        function showSignIn() {
            document.getElementById("forgotPasswordForm").classList.remove("active");
            document.getElementById("signInForm").classList.add("active");
        }
    </script>

</body>
</html>
