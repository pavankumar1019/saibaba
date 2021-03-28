<?php
$mysqli = new mysqli("localhost","u430139865_dm","P0g/&W2zu+","u430139865_dm");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>