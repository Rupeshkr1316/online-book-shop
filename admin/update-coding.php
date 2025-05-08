<?php
if (isset($_POST['submit'])) {
	include('includes/connection.php');
	//PHOTO1
	if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
		$image_name = $_FILES["image"]["name"];
		$location = "../images/";
		$uploaded = move_uploaded_file($_FILES["image"]["tmp_name"], $location . $image_name);
		$photo = "image/" . $image_name;
	} else {
		$image_name = $_POST['oldimage'];
	}
	$id = $_POST['id'];
	$title = $_POST['title'];
	$auth_name = $_POST['auth_name'];
	$publication = $_POST['publication'];
	$description = $_POST['description'];
	$Price = $_POST['Price'];
	$query = ("UPDATE products SET title='$title', auth_name='$auth_name', publication='$publication', description='$description', Price='$Price', image='$image_name' where id='$id'");
	$query_run = mysqli_query($conn,$query);
	if ($query_run) {
		$success_msg = "update has been Submitted Successfully !";
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$success_msg')
					window.location.href='index1.php';
					</SCRIPT>");
	}
}
?>