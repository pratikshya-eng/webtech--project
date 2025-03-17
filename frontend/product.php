<?php
session_start();

// Sample products (for demonstration)
$products = [
    1 => ['name' => 'Blossom Time', 'price' => 700, 'image' => '../assets/images/product.jpg'],
    2 => ['name' => 'Rose Elegance', 'price' => 1000, 'image' => '../assets/images/PRODUCT1.JPG'],
    3 => ['name' => 'Spring Delight', 'price' => 3500, 'image' => '../assets/images/PRODUCT2.JPG'],
    4 => ['name' => 'Sunflower Radiance', 'price' => 4000, 'image' => '../assets/images/PRODUCT4.JPG'],
    5 => ['name' => 'Lovely Lilies', 'price' => 5000, 'image' => '../assets/images/PRODUCT5.JPG'],
    6 => ['name' => 'Phoenix Flower', 'price' => 5000, 'image' => '../assets/images/PRODUCT6.JPG']
];


// Initialize the cart if it's not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add a product to the cart
if (isset($_GET['add_to_cart'])) {
    $product_id = $_GET['add_to_cart'];
    if (!isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] = ['quantity' => 1, 'price' => $products[$product_id]['price'], 'name' => $products[$product_id]['name'], 'image' => $products[$product_id]['image']];
    } else {
        $_SESSION['cart'][$product_id]['quantity']++;
    }
}

// Remove a product from the cart
if (isset($_GET['remove_from_cart'])) {
    $product_id = $_GET['remove_from_cart'];
    unset($_SESSION['cart'][$product_id]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Details</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            margin: 20px;
        }
        .products-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .product {
            border: 1px solid blue;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .product img {
            max-width: 100%;
            border-radius: 8px;
        }
        .product h2 {
            margin: 10px 0;
        }
        .product p {
            margin: 5px 0;
        }
        .product button {
            background-color: pink;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .product button:hover {
            background-color: darkpink;
        }

        /* Cart Style */
        .cart {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .cart p {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .cart ul {
            list-style-type: none;
            padding: 0;
        }

        .cart ul li {
            background-color: #fafafa;
            padding: 8px;
            border-radius: 5px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
        }

        .cart a {
            color: #ff69b4;
            font-weight: bold;
            text-decoration: none;
        }

        .cart a:hover {
            text-decoration: underline;
        }

        /* Header and Footer Styles */
        .header, .footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
        }

        .footer {
            margin-top: 20px;
        }

        .remove-btn {
            background-color:rgb(15, 15, 15);
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .remove-btn:hover {
            background-color:rgb(27, 25, 26);
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Welcome to Our Flower Shop</h1>
        <nav>
            <a href="index.php" style="color:white; margin: 0 10px;">Home</a>
            <a href="product.php" style="color:white; margin: 0 10px;">Products</a>
            <a href="cart.php" style="color:white; margin: 0 10px;">Cart</a>
        </nav>
    </div>

    <h1>Our Products</h1>

    <!-- Cart Display -->
    <div class="cart">
        <p>Your Cart:</p>
        <?php
        if (!empty($_SESSION['cart'])) {
            echo "<ul>";
            foreach ($_SESSION['cart'] as $product_id => $item) {
                echo "<li>" . $item['name'] . " - Quantity: " . $item['quantity'] . " - Rs " . number_format($item['price'], 2) . " ";
                echo "<a href='product.php?remove_from_cart=$product_id' class='remove-btn'>Remove</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Your cart is empty.</p>";
        }
        ?>
        <a href="cart.php">Go to Cart</a>
    </div>

    <div class="products-container">
        <!-- Loop through products -->
        <?php foreach ($products as $product_id => $product): ?>
        <div class="product">
            <h2><?php echo htmlspecialchars($product['name']); ?></h2>
            <p><strong>Price:</strong> Rs <?php echo number_format($product['price'], 2); ?></p>
            <p><strong>Description:</strong> This is a premium bouquet highly demanded by customers.</p>
            <img src="<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            <a href="product.php?add_to_cart=<?php echo $product_id; ?>">
                <button>Buy Now</button>
            </a>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 Flower Shop. All rights reserved.</p>
    </div>

</body>
</html>
