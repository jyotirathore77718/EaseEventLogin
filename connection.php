<?php
$con=mysqli_connect('localhost:3306','root','','easeevent');
$servername = "localhost";
$username = "root";
$password = "";  // Default password for XAMPP
$dbname = "easeevent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
