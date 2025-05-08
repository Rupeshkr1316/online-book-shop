<?php
if (isset($_POST['submit'])) {
    include('includes/connection.php');

    $orderid = $_POST['order_id'];
    $status = $_POST['status'];
   
    $query = "UPDATE `order_d` SET `status`= '$status' WHERE id ='$orderid'";
    $query_run = mysqli_query($conn,$query);
    //print_r($_POST);

    if ($query_run) {
        $success_msg = "Update has been submitted successfully!";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('$success_msg')
                window.location.href='order-details.php';
                </SCRIPT>");
    } else {
        $error_msg = "Error occurred while updating user data.";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('$error_msg')
                window.location.href='user-registration.php';
                </SCRIPT>");
    }
}
?>