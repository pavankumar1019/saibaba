<?php
/*
  Author : Pavan Kumar
  Email : pavan5639kumar@gmail.com
*/

$DB_host = "localhost";
$DB_user = "u815129216_dm";
$DB_pass = "Pavan5639";
$DB_name = "u815129216_dm";

try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
include_once 'class.crud.php';
$crud = new crud($DB_con);
?>
