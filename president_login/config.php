<?php
$con = mysqli_connect('localhost','root','Pavan1019','sai');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"sai");
?>