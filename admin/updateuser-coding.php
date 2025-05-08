<?php
if (isset($_POST['submit'])) {
    include('includes/connection.php');
    // Retrieve form data
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    // Update user data in the database
    $query = "UPDATE register SET f_name='$fname', l_name='$lname', email='$email', mobile='$mobile', username='$uname', password='$pwd' WHERE id='$id'";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        $success_msg = "Update has been submitted successfully!";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('$success_msg')
                window.location.href='user-registration.php';
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
