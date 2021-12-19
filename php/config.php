<?php
$servername = "localhost";
$username = "root";
$password = " ";
$myDB = "VIMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $myDB);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>