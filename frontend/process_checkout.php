<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data with isset() to check if fields are set
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $card_number = isset($_POST['card_number']) ? trim($_POST['card_number']) : '';
    $exp_date = isset($_POST['exp_date']) ? trim($_POST['exp_date']) : '';
    $cvv = isset($_POST['cvv']) ? trim($_POST['cvv']) : '';
    $amount = isset($_POST['amount']) ? trim($_POST['amount']) : '';

    // Basic validation
    if (empty($name) || empty($email) || empty($card_number) || empty($exp_date) || empty($cvv) || empty($amount)) {
        $message = "All fields are required!";
        $status = "error";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format!";
        $status = "error";
    } elseif (!is_numeric($card_number) || strlen($card_number) != 16) {
        $message = "Invalid card number! Must be 16 digits.";
        $status = "error";
    } elseif (!is_numeric($cvv) || strlen($cvv) != 3) {
        $message = "Invalid CVV! Must be 3 digits.";
        $status = "error";
    } elseif (!is_numeric($amount) || $amount <= 0) {
        $message = "Invalid amount!";
        $status = "error";
    } else {
        // Simulate payment processing (In real life, you would integrate a payment gateway like PayPal, Stripe, etc.)
        $transaction_id = "TXN" . rand(10000, 99999);
        $message = "Payment Successful! Your Transaction ID: " . $transaction_id;
        $status = "success";

        // Store payment details in session (for demo purposes)
        $_SESSION['payment'] = [
            'name' => $name,
            'email' => $email,
            'amount' => $amount,
            'transaction_id' => $transaction_id
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Process</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: rosybrown;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: darkred;
        }
        .message {
            padding: 10px;
            margin-top: 10px;
            color: white;
            border-radius: 5px;
        }
        .success {
            background-color: green;
        }
        .error {
            background-color: red;
        }
        .home-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: rosybrown;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .home-button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

    <h1>Secure Payment</h1>
    
    <div class="container">
        <form method="POST">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="text" name="card_number" placeholder="Card Number (16 digits)" required>
            <input type="text" name="exp_date" placeholder="Expiry Date (MM/YY)" required>
            <input type="text" name="cvv" placeholder="CVV (3 digits)" required>
            <input type="number" name="amount" placeholder="Enter Amount" required>
            <button type="submit">Pay Now</button>
        </form>

        <?php if (!empty($message)): ?>
            <div class="message <?php echo $status; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <!-- Home button -->
        <a href="index.php" class="home-button">Go to Home</a>
    </div>

</body>
</html>
