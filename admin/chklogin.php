<?php
ob_start();
session_start();
?>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		include("includes/connection.php");
		$uname = mysqli_real_escape_string($conn, $_POST['username']);
		$pword = mysqli_real_escape_string($conn, $_POST['password']);
		$query = mysqli_query($conn, "select username, password from admin_login where username = '$uname' && password = '$pword'");
		$count_users = mysqli_num_rows($query);
		if($count_users == 1)
		{
			$_SESSION['username'] = $uname;
			echo "<script type=\"text/javascript\">alert('Login Successful.');window.location.href='index1.php'</script>";
		}
		else
		{
			echo "<script>alert('Wrong username or password entered.');window.location.href='index.php'</script>";
		
		}
		
	}

	$conn -> close();
	ob_flush();
?>