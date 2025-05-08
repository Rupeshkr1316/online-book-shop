<?php
include('includes/connection.php');
// Assuming you have already established a database connection

// Retrieve the order_id from the URL parameter
$order_id = $_GET['id'];

// Query the order_d table to fetch the order details
$orderQuery = "SELECT * FROM order_d WHERE id = '$order_id'";
$orderResult = mysqli_query($conn, $orderQuery);
$orderData = mysqli_fetch_assoc($orderResult);

// Check if the order exists
if ($orderData) {
    // Retrieve the order details
    $userId = $orderData['userid'];
    $grandTotal = $orderData['gtotal'];
    $status = $orderData['status'];

    // Start generating the HTML for the invoice
    echo "<!DOCTYPE html>
    <html>
    <head>
        <title>Invoice Bill</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
            }
            
            .invoice-header {
                text-align: center;
                margin-bottom: 20px;
            }
            
            .invoice-details {
                margin-bottom: 20px;
            }
            
            .invoice-items {
                margin-bottom: 20px;
            }
            
            .invoice-items table {
                width: 100%;
                border-collapse: collapse;
            }
            
            .invoice-items th,
            .invoice-items td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            
            .invoice-total {
                text-align: right;
            }
            
            .print-button {
                text-align: center;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class='invoice-header'>
            <h2>Invoice</h2>
        </div>
        <div class='invoice-details'>
            <p><strong>Order ID:</strong> $order_id</p>
            <p><strong>User ID:</strong> $userId</p>
            <p><strong>Status:</strong> $status</p>
        </div>
        <div class='invoice-items'>
            <h3>Order Items</h3>
            <table>
                <tr>
                    <th>Product ID</th>
                    <th>Quantity</th>
                </tr>";

    // Query the order_items table to fetch the items for this order
    $itemsQuery = "SELECT * FROM order_items WHERE order_id = '$order_id'";
    $itemsResult = mysqli_query($conn, $itemsQuery);

    while ($itemData = mysqli_fetch_assoc($itemsResult)) {
        $productId = $itemData['p_id'];
        $quantity = $itemData['quantity'];

        // Display each item
        echo "<tr>
                <td>$productId</td>
                <td>$quantity</td>
              </tr>";
    }

    echo "</table>
        </div>
        <div class='invoice-total'>
            <p><strong>Grand Total:</strong> $grandTotal</p>
        </div>
        <div class='print-button'>
            <button onclick='window.print()' class='btn btn-primary'>Print</button>
        </div>
    </body>
    </html>";
} else {
    // Order not found
    echo "<p>Order not found.</p>";
}
?>
