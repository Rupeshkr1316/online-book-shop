<?php
if (isset($_POST['submit'])) {

	include('includes/connection.php');
	//PHOTO1
	$image_name = $_FILES["image"]["name"];
	$location = "../images/";
	$uploaded = move_uploaded_file($_FILES["image"]["tmp_name"], $location . $image_name);
	$photo = "image/" . $_FILES["image"]["name"];

	$title = $_POST['title'];
	$auth_name = $_POST['auth_name'];
	$publication = $_POST['publication'];
	$description = $_POST['description'];
	$Price = $_POST['Price'];
	$query = "INSERT INTO `products` (`title`,`auth_name`,`publication`,`description`,`Price`,`image`) VALUES
('$title', '$auth_name','$publication','$description','$Price','$image_name')";
	$query_run = mysqli_query($conn, $query);
	if ($query_run) {
		$success_msg = "Add product has been Submitted Successfully !";
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$success_msg')
					window.location.href='index1.php';
					</SCRIPT>");
	}
}
//mysqli_query($conn,$qury);


//$insert_pro=mysqli_query($conn,$conn, $mes);
?>