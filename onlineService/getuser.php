<?php
include_once 'db/database.php';
$q = intval($_GET['q']);
$result = mysqli_query($conn,"SELECT * FROM events WHERE id = '".$q."'");
?>
 <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
    echo "<input type='text'  id='amount' name='amount' value='".$row['price']."'required  disabled>";
}
?>