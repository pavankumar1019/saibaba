<?php

//process.php

$connect = new PDO("mysql:host=localhost; dbname=u430139865_dm", "u430139865_dm", "P0g/&W2zu+");

if(isset($_POST["first_name"]))
{
 $data = array(
  ':first_name'  => trim($_POST["first_name"]),
  ':last_name'  => trim($_POST["last_name"])
 );

 $query = "
 INSERT INTO tbl_sample 
 (first_name, last_name) 
 VALUES (:first_name, :last_name)
 ";

 $statement = $connect->prepare($query);

 $statement->execute($data);

 echo 'done';
 
}

?>
