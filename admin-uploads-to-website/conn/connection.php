<?php 
$host = "localhost";
$user = "u430139865_ydyp";
$db_password = "pavan5639";
$db_name = "u430139865_ydyp";

$conn= mysqli_connect($host,$user,$db_password,$db_name);
if($conn){
    //echo "Connected";

}
else{
    echo"not connected";
}



?>