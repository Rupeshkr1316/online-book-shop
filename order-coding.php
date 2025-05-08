<?php
if(isset($_POST['submit'])){
	   
	include('includes/connection.php');

		             $title=$_POST['title'] ;
					$name=$_POST['name'];
					$price=$_POST['price'];
					$c_name=$_POST['c_name'];
					$address=$_POST['address'] ;
					$mobile=$_POST['mobile'] ;
					date_default_timezone_set("Asia/Kolkata");
					$create_time=date("h:i A");
					$create_date=date('d-m-y');
			$query = "INSERT INTO `order_details` (`title`,`name`,`price`,`c_name`,`address`,`mobile`,`date_time`) VALUES
('$title', '$name','$price','$c_name','$address','$mobile','$create_date')";
	$query_run = mysqli_query($conn,$query);
			if($query_run)
			{
				$success_msg = "Your order has been Submitted Successfully !";
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$success_msg')
					window.location.href='index.php';
					</SCRIPT>");
			}
					}
//mysqli_query($conn,$qury);


//$insert_pro=mysqli_query($conn,$conn, $mes);
?>
     