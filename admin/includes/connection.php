<?php  

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'onlinebook';
	try {
		$conn = new mysqli($host, $user, $password, $database, 3307);
	} catch( Exception $e) {
		echo "\n Exception Caught during conn creation:", $e->getMessage();
	}
	//$conn = mysqli_connect('localhost', 'root', '');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysqli_error($conn));
	}

	// if ($conn->connect_error) {
	// 	die('Connection failed: ' . $conn->connect_error);
	// }
	mysqli_select_db($conn, "onlinebook");

	
?>