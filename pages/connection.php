<?php
$servername = "localhost";
$username = "root";
<<<<<<< HEAD
$password = "root";
=======
$password = "";
>>>>>>> refs/remotes/origin/master
$db = "phr";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>