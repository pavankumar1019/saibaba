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
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['name'];
	 $last_name = $_POST['desg'];
	 $city_name = $_POST['number'];
	 $sql = "INSERT INTO d,_devotees (name,designation,phone)
	 VALUES ('$first_name','$last_name','$city_name')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>