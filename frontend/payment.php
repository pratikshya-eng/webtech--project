<?php
session_start();
include('header.php');

// Check if the cart is empty
if (empty($_SESSION['cart'])) {
    header('Location: cart.php');
    exit();
}

// Calculate the total amount
$total = 0;
foreach ($_SESSION['cart'] as $product) {
    $total += $product['price'] * $product['quantity'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Payment</title>
    <link rel="stylesheet" href="styles.css">
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
        .checkout-container {
            width: 80%;
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .checkout-summary {
            margin-bottom: 20px;
            text-align: left;
        }
        .checkout-summary h3 {
            margin: 10px 0;
        }
        .checkout-summary p {
            margin: 5px 0;
        }
        .form-input {
            margin-bottom: 10px;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .checkout-actions button {
            padding: 10px 20px;
            background-color: #2E3A87;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .checkout-actions button:hover {
            background-color: #1F2B63;
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
        <h1>Checkout - Payment</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="ecommerce.php">Products</a>
            <a href="cart.php">Cart</a>
            <a href="signin.php">Sign In</a>
            <a href="register.php">Register</a>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <div class="checkout-container">
            <h2>Review Your Order</h2>
            <div class="checkout-summary">
                <?php foreach ($_SESSION['cart'] as $product): ?>
                    <p><?php echo htmlspecialchars($product['name']); ?> - $<?php echo number_format($product['price'], 2); ?> x <?php echo $product['quantity']; ?></p>
                <?php endforeach; ?>
                <h3>Total: $<?php echo number_format($total, 2); ?></h3>
            </div>

            <!-- Payment Form -->
            <form action="process_payment.php" method="POST">
                <h3>Enter Your Payment Details</h3>
                <input class="form-input" type="text" name="name" placeholder="Full Name" required>
                <input class="form-input" type="text" name="address" placeholder="Shipping Address" required>
                <input class="form-input" type="email" name="email" placeholder="Email Address" required>
                <input class="form-input" type="text" name="card_number" placeholder="Card Number" required>
                <input class="form-input" type="text" name="expiry_date" placeholder="Expiry Date (MM/YY)" required>
                <input class="form-input" type="text" name="cvv" placeholder="CVV" required>
                
                <div class="checkout-actions">
                    <button type="submit" name="submit_payment">Submit Payment</button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Happy Bouquet Shop | All Rights Reserved</p>
    </footer>
</body>
</html>
