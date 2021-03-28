<?php 
$host = "localhost";
$user = "u430139865_dm";
$db_password = "P0g/&W2zu+";
$db_name = "u430139865_dm";

$conn= mysqli_connect($host,$user,$db_password,$db_name);
if($conn){
    //echo "Connected";

}
else{
    echo"not connected";
}



?>