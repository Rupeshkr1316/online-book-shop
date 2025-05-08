<?php
ob_start();
session_start();
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include("includes/connection.php");
	try {
		$uname = mysqli_real_escape_string($conn, $_POST['username']);
		// echo '\n uname:',$uname;
		$pword = mysqli_real_escape_string($conn, $_POST['password']);
		// echo '\n pword:',$pword;
		$query = mysqli_query($conn, "select username, password from register where username = '$uname' && password = '$pword'");
		// echo '\n query:',$query;
		$count_users = mysqli_num_rows($query);
		echo '\n count_users:',$count_users;
	} catch( Exception $e) {
		echo "\n Exception Caught during creds validation:", $e->getMessage();
	}
	
	if ($count_users == 1) {
		$_SESSION['username'] = $uname;
		echo "<script type=\"text/javascript\">alert('Login Successful.');window.location.href='index.php';</script>";
	} else {
		echo "<script>alert('Wrong username or password entered.');window.location.href='login.php';</script>";
	}
}
closeConnection($conn);
ob_flush();
?>