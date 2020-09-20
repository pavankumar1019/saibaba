<?php
$mysqli = new mysqli("localhost","root","Pavan1019","sai");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>