<?php
session_start();
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
?>


<?php
include('includes/connection.php');
// Assuming you have already established a database connection

// Retrieve the cart items and grand total from $_POST
$cartItems = $_POST['cart'];
$grandTotal = $_POST['grandTotal'];

// Retrieve the user ID (assuming it's stored in a session variable)
$userId = $_SESSION['username'];
$address = $_POST['useraddress'];

// Insert order details into the 'order_d' table
$orderStatus = 'pending'; // Set the initial status to 'pending'
$orderQuery = "INSERT INTO order_d (`userid`, `gtotal`, `status`, `UserAddress`) VALUES ('$userId', '$grandTotal', '$orderStatus', '$address')";
if (mysqli_query($conn,$orderQuery)) {
    $orderId = mysqli_insert_id($conn); // Retrieve the generated order ID
} else {
    echo "Error inserting order details: " . mysqli_error($conn);
    // Handle the error accordingly
}

// Insert order items into the 'order_items' table
foreach ($cartItems as $productId => $quantity) {
    $orderItemsQuery = "INSERT INTO order_items (order_id, p_id, quantity) VALUES ('$orderId', '$productId', '$quantity')";
    if (!mysqli_query($conn,$orderItemsQuery)) {
        echo "Error inserting order items: " . mysqli_error($conn);
        // Handle the error accordingly
    }
}
// Clear the cart or perform any other necessary actions
$_SESSION['cart'] = array();

echo "<script>alert('Order placed successfully!');window.location.href='index.php';</script>";
?>
