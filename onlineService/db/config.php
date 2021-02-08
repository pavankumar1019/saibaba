<?php
$mysqli = new mysqli("localhost","u815129216_dm","Pavan5639","u815129216_dm");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>