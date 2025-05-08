<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include('head_meenu.php'); ?>
<style>
    .contact-us-info1 ul {
        margin-top: 11px;
        border: 1px solid #bdbdbd;
    }

    li {
        display: list-item;
        text-align: -webkit-match-parent;
    }

    .contact-us-info1 ul li {
        list-style: none;
        margin-left: 20px;

    }

    ul {

        margin: 0;
        padding: 0;
    }

    ol,
    ul {
        margin-top: 0;
        margin-bottom: 10px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .delete-btn {
        color: red;
    }

    .total-row {
        font-weight: bold;
    }
</style>
<div id="wrapper">
    <!-- Header Area Start Here -->
    <!-- Header Area End Here -->
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background:url(slider/contact.jpg); padding-bottom:50px;">
        <div class="container">
            <div class="pagination-area">
                <h1>Cart Page</h1>
                <p style="font-size:18px; color:#FFF;"><span><a href="index.php">Home</a></span>&nbsp;&nbsp;&nbsp;<span><a href="index.php">Contact</a></span>
                    </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Contact Us Page 1 Area Start Here -->
    <div class="container" style="margin:20px auto;">
        <h2 class="text-center text-dark" style="margin: 20px auto;">Cart Details</h2>
        <div class="contact-us-page1-area">
            <form action="carting-page.php" method="post">
                <?php
                // Display cart items
                if (!empty($_SESSION['cart'])) {
                    include("includes/connection.php");
                    $productIds = implode(",", array_keys($_SESSION['cart']));
                    $query = "SELECT * FROM products WHERE id IN ($productIds)";
                    $result = mysqli_query($conn,$query);

                    if (mysqli_num_rows($result) > 0) {
                        $grandTotal = 0;
                        echo "<table class='table table-bordered'>";
                        echo "<tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publication</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Total</th>
                    <th></th>
                </tr>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            $productId = $row['id'];
                            $title = $row['title'];
                            $author = $row['auth_name'];
                            $publication = $row['publication'];
                            $price = $row['Price'];
                            $quantity = $_SESSION['cart'][$productId];
                            $image = $row['image'];
                            $total = $price * $quantity;
                            $grandTotal += $total;

                            echo "<tr>";
                            echo "<td>$title</td>";
                            echo "<td>$author</td>";
                            echo "<td>$publication</td>";
                            echo "<td class='price'>$price</td>";
                            echo "<td><input type='number' name='cart[$productId]' class='quantity-input' value='$quantity' style='width:50px;'></td>";
                            echo "<td><img src='./images/$image' alt='Product Image' height='70' width='80'></td>";
                            echo "<td class='total'>$total</td>";
                            echo "<td><a href='cart.php?remove=$productId' class='delete-btn'>Delete</a></td>";
                            echo "</tr>";
                        }
                        echo "<tr class='total-row'>
                    <td colspan='2'>
                    <input type='text' placeholder='Enter Your Address' class='form-control form-control-sm' name='useraddress' required >
                    <input type='hidden' id='gtotala' name='grandTotal' value='$grandTotal'>
                <button type='submit' class='btn btn-primary'>Place Order</button>
                </td>
                    <td colspan='4' class='text-right'>Grand Total:</td>
                    <td class='grand-total'>$grandTotal</td>
                    <td></td>
                </tr>";
                        echo "</table>";
                    } else {
                        echo "Your cart is empty.";
                    }
                } else {
                    echo "<h3 class='taxt-dark'>Your cart is empty.</h3>";
                }
                ?>
            </form>
        </div>
    </div>
    <!-- Contact Us Page 1 Area End Here -->
    <!-- Footer Area Start Here -->
    <?php include('comman_footer.php'); ?>
    <!-- Footer Area End Here -->