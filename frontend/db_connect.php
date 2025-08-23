<?php
$servername = "localhost";
$username = "root"; // XAMPP default
$password = "";     // XAMPP default (empty)
$database = "eternal_hr";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


