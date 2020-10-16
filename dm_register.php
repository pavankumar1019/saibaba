<?php
$servername='localhost';
$username='u430139865_ydyp';
$password='pavan5639';
$dbname = "u430139865_ydyp";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
<?php
if(isset($_POST['submit']))
{	 
	 $first_name = $_POST['name_d'];
	 $last_name = $_POST['desg'];
	 $city_name = $_POST['number'];
	 $sql = "INSERT INTO dm_devotees (name,designation,phone)
	 VALUES ('$first_name','$last_name','$city_name')";
	 if (mysqli_query($conn, $sql)) {
       echo"
        <script>alert('Thank You!');
     window.location.replace('register.php');
    </script>";
       
               
	 } else {
        echo "<script>alert('already Done!');
        window.location.replace('register.php');
        </script>";
	 }
	 mysqli_close($conn);
}
?>
