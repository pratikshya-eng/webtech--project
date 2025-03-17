<?php
include 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $result = $conn->query("SELECT * FROM products");
    $products = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($products);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stmt = $conn->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
    $stmt->bind_param("sd", $name, $price);
    $stmt->execute();
    echo json_encode(["message" => "Product added successfully."]);
}
?>