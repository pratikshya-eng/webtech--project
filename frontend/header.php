<?php
// Start session only if it's not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-Commerce Site</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: rosybrown;
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 24px;
        }
        nav {
            background-color: pink;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            font-weight: bold;
        }
        nav a:hover {
            color: yellow;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our E-commerce Site</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="cart.php">Cart</a>
        <a href="checkout.php">Checkout</a>
        <a href="contact.php">Contact</a>
    </nav>
    <div class="container">
