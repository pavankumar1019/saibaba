<?php
$connection = mysql_connect("localhost", "u430139865_ydyp", "pavan5639"); // Establishing Connection with Server
$db = mysql_select_db("u430139865_ydyp", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$desg = $_POST['desg'];
$contact = $_POST['number'];
if($name !=''||$desg !=''){
//Insert Query of SQL
$query = mysql_query("insert dm_devotees(name, designation, phone) values ('$name', '$desg', '$contact')");
echo "<p>Insertion Done <br/></p>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>