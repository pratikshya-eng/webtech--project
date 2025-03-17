<?php
session_start();

// Check if the user is logged in as admin
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: signin.php"); // Redirect to login page if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="ecommerce.php">Products</a>
            <a href="cart.php">Cart</a>
            <a href="admin.php">Admin Dashboard</a>
            <a href="signout.php">Sign Out</a>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <h2>Welcome to the Admin Dashboard</h2>
        <p>Manage products, view orders, and more!</p>

        <!-- Admin options -->
        <ul>
            <li><a href="add_product.php">Add New Product</a></li>
            <li><a href="view_orders.php">View Orders</a></li>
            <li><a href="manage_users.php">Manage Users</a></li>
        </ul>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Happy Bouquet Shop | All Rights Reserved</p>
    </footer>
</body>
</html>
