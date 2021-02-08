<?php 
$host = "localhost";
$user = "u815129216_dm";
$db_password = "Pavan5639";
$db_name = "u815129216_dm";

$conn= mysqli_connect($host,$user,$db_password,$db_name);
if($conn){
    //echo "Connected";

}
else{
    echo"not connected";
}



?>