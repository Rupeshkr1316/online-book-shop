<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
// Remove product from cart
if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];

    // Remove the product from the cart array
    unset($_SESSION['cart'][$product_id]);

    // Redirect back to the cart page or any other desired page
    header("Location: showcart.php");
    exit();
}

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Add the product to the cart array
    $_SESSION['cart'][$product_id] = $quantity;

    // Redirect to the cart page or any other desired page
    echo "<script>alert('Product Added To Cart');window.location.href='index.php';</script>";
    exit();
}
