<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Bouquet Shop - Home</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fdfdfd;
            color: #333;
        }
        header {
            background: linear-gradient(to bottom, rgba(255, 182, 193, 0.8), rgba(255, 105, 180, 0.8)), 
                url('hero-image.jpg') no-repeat center center / cover;
            color: white;
            padding: 50px 20px;
            text-align: center;
        }
        header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        header p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        header a {
            background-color: #ff69b4;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        header a:hover {
            background-color: #ff1493;
        }
        nav {
            background-color: #ffc0cb;
            padding: 10px;
            text-align: center;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        nav a:hover {
            color: #ff69b4;
        }
        section {
            padding: 40px 20px;
            text-align: center;
        }
        section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        section a {
            display: inline-block;
            background-color: #ff69b4;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        section a:hover {
            background-color: #ff1493;
        }
        footer {
            background-color: #ffc0cb;
            color: #333;
            text-align: center;
            padding: 15px 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Happy Bouquet Shop</h1>
        <p>Your one-stop shop for beautiful and unique bouquets!</p>
        <a href="frontend\ecommerce.php">Shop Now</a>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="frontend\ecommerce.php">Products</a>s
        <a href="contact.html">Contact</a>
    </nav>
    <section>
        <h2>Why Choose Us?</h2>
        <p>We offer high-quality, fresh, and beautifully arranged bouquets for every occasion. Let us help you make your moments special!</p>
        <a href="index.php">Explore Our Collection</a>
    </section>
    <footer>
        <p>&copy; 2025 Happy Bouquet Shop. All rights reserved.</p>
    </footer>
</body>
</html>
