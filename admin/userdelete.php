<?php
include('includes/connection.php');
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query_delete = mysqli_query($conn, "DELETE from register where id = '$id'");
	if ($query_delete) {
		$success_msg = "Data has been deleted Successfully !";
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$success_msg')
					window.location.href='user-registration.php';
					</SCRIPT>");
	}
}
?>