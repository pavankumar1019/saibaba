<?php 
include("config.php");
$sql = "SELECT * FROM payment_gateway_access ORDER BY id";

if ($result = $mysqli -> query($sql)) {
  while ($row = $result -> fetch_row()) {
    // printf ("%s (%s) (%s) (%s)\n", $row[0], $row[1], $row[2], $row[3]);
$merchent_key=$row[1];
$merchent_salt=$row[2];
$merchent_mode=$row[3];
  }
  $result -> free_result();
}

$mysqli -> close();
?>