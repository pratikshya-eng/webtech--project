<?php
// Start session if needed
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Site</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: rosybrown;
            text-align: center;
            padding: 20px;
            color: white;
        }
        nav {
            background-color: pink;
            padding: 10px;
            text-align: center;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        nav a:hover {
            color: yellow;
        }
        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('assets/images/hero-ecommerce.jpg') no-repeat center center / cover;
            height: 300px;
            color: white;
            text-align: center;
        }
        .hero h1 {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 10px;
        }
        section {
            padding: 20px;
            text-align: center;
        }
        section img {
            max-width: 100%;
            border-radius: 10px;
            margin: 20px 0;
        }
        section a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: rosybrown;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        section a:hover {
            background-color: darkred;
        }
        footer {
            background-color: rosybrown;
            text-align: center;
            padding: 10px;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our E-commerce Site</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="ecommerce.php">Products</a>
        <a href="contact.php">Contact</a>
    </nav>
    <div class="hero">
        <h1>Discover Unique Bouquets</h1>
    </div>
    <section>
        <h2>Our Products</h2>
        <p>We offer the best and unique flower bouquets at great prices!</p>
        <img src="../assets/images/beauty.jpg" alt="Beautiful bouquet">
        <p>Each bouquet is handcrafted to make your moments special.</p>
        <img src="../assets/images/beauty1.jpg" alt="Beautiful bouquet">
        <p>Perfect for birthdays, weddings, and other celebrations!</p>
        <a href="product.php">Explore More Products</a>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Happy Bouquet Shop</p>
    </footer>
</body>
</html>
