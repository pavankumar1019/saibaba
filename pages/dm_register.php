<?php
include('../dbconnection/db.php'); 
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
