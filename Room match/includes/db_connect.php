<?php
$host = "localhost";  // Change this if your database is hosted remotely
$username = "root";   // Your database username
$password = "";       // Your database password (keep empty if using XAMPP/MAMP/LAMP default)
$database = "room_match";  // Your database name
$port=3307;

// Create connection
$conn = new mysqli($host, $username, $password, $database,$port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set to UTF-8 (to support special characters)
$conn->set_charset("utf8");

// Optional: Uncomment to confirm connection is working
// echo "Database connected successfully";

?>
