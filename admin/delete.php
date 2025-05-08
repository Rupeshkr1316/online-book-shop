<?php
include('includes/connection.php');
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query_delete = mysqli_query($conn,"DELETE from products where id = '$id'");
	if ($query_delete) {
		$success_msg = "Data has been deleted Successfully !";
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$success_msg')
					window.location.href='index1.php';
					</SCRIPT>");
	}
}
?>