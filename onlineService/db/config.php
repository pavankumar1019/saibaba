<?php
$mysqli = new mysqli("localhost","u430139865_ydyp","pavan5639","u430139865_ydyp");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>