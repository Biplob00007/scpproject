<?php
$servername = "localhost";
$username = "a3002796_app";
$password = "nepal@123";
$database = "a3002796_scp";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>