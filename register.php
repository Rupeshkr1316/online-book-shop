<?php
if(isset($_POST['submit'])){
	   
	include('includes/connection.php');

		             $f_name=$_POST['f_name'] ;
					$l_name=$_POST['l_name'];
					$email=$_POST['email'];
					$mobile=$_POST['mobile'];
					$username=$_POST['username'] ;
					$password=$_POST['password'] ;
			$query = "INSERT INTO `register` (`f_name`,`l_name`,`email`,`mobile`,`username`,`password`) VALUES
('$f_name', '$l_name','$email','$mobile','$username','$password')";
	$query_run = mysqli_query($conn, $query);
			if($query_run)
			{
				$success_msg = "Registration has been  Successfull!";
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$success_msg')
					window.location.href='index.php';
					</SCRIPT>");
			}
					}
//mysqli_query($conn,$qury);


//$insert_pro=mysqli_query($conn,$conn, $mes);
?>
     