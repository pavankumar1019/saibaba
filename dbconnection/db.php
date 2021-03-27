<?php
$servername = "localhost";
$username = "u430139865_dm";
$password = "P0g/&W2zu+";
$dbname = "u430139865_dm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>