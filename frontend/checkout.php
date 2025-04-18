<?php
session_start();
include('header.php');

// If the cart is not initialized, initialize it
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
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
        .checkout-item {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .checkout-item:last-child {
            border-bottom: none;
        }
        .checkout-item h4 {
            margin: 0;
        }
        .checkout-item p {
            margin: 5px 0;
            color: #555;
        }
        .checkout-item .price {
            font-weight: bold;
            color: #2E3A87;
        }
        .checkout-actions {
            margin-top: 20px;
            text-align: center;
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
        @media (max-width: 768px) {
            .checkout-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Checkout</h1>
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

            <?php if (empty($_SESSION['cart'])): ?>
                <p>Your cart is empty. Please add items to the cart before proceeding.</p>
            <?php else: ?>
                <div class="checkout-items">
                    <?php 
                        $total = 0;
                        foreach ($_SESSION['cart'] as $product):
                            $total += $product['price'] * $product['quantity'];
                    ?>
                        <div class="checkout-item">
                            <div class="item-details">
                                <h4><?php echo htmlspecialchars($product['name']); ?></h4>
                                <p>Quantity: <?php echo $product['quantity']; ?></p>
                            </div>
                            <div class="item-price">
                                <p class="price">$<?php echo number_format($product['price'], 2); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="checkout-summary">
                    <h3>Total: $<?php echo number_format($total, 2); ?></h3>
                </div>
            <?php endif; ?>

            <!-- Checkout action -->
            <div class="checkout-actions">
                <form action="process_checkout.php" method="POST">
                    <button type="submit">Proceed to Payment</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Happy Bouquet Shop | All Rights Reserved</p>
    </footer>
</body>
</html>
