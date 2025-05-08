<?php  
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'onlinebook';

// Create a connection
try {
    $conn = new mysqli($host, $user, $password, $database, 3307);
} catch( Exception $e) {
    echo "\n Exception Caught during conn creation:", $e->getMessage();
}


// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// echo 'Connected successfully';

// You can proceed with your queries here

// $conn->close(); // Always close the connection when done

function closeConnection($conn1) {    
    // Code to be executed  
    try {
        $conn1->close();
    } catch (Exception $e) {
        echo "\n Exception occured during closing of the connection:", $e->getMessage();
    } 
    
    }
?>
