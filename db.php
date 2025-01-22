<?php
// Database connection variables
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'login';  // Your database name

// Create connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
