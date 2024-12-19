<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['nsme']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $book = htmlspecialchars($_POST['book']);
    $qty = intval($_POST['quantity']);

    if (empty($name) || empty($phone) || empty($address) ||empty($book) || $quantity <=0) {
        echo "Please fill in all fields correctly.";
        exit;
    }

    echo "<h1>Order Confirmation</h1>";
    echo "<p>Thank you for your order, $name!</p>";
    echo "<p>Order Details:</p>";
    echo "<ul>";
    echo "<li>Book: $book</li>";
    echo "<li>Quantity: $quantity</li>";
    echo "<li>Address: $address</li>";
    echo "<li>Phone: $phone</li>";
    echo "</ul>";
} else {
    echo "Invalid request.";
}
?>