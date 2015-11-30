<?php
$servername = "localhost";
$username = "root";
<<<<<<< HEAD
$password = "";
=======
<<<<<<< HEAD
$password = "root";
=======
$password = "";
>>>>>>> refs/remotes/origin/master
>>>>>>> c0fa1dec832f8af2f07c157930532e23576878f6
$db = "phr";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>