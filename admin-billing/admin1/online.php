<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container-fluid" id="table-scroll">
    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="text-center">
          <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Event</th>
            <th>Booking Date</th>
            <th>Amount</th>
            <th>Transaction ID</th>
            <th>Transaction Status</th>
            <th>Print</th>
          </tr>
        </thead>
        <tbody>
     
        <?php
$servername = "localhost";
$username = "u430139865_ydyp";
$password = "pavan5639";
$dbname = "u430139865_ydyp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM abhishekam_payment_dt";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    
    <tr>
                	<td><?php print($row['full_name']); ?></td> <!--utilisation de print pour l'affichage de id pour ce ligne-->
                	<td><?php print($row['email_ID']); ?></td><!--affichage de nome-->
                	<td><?php print($row['address_p']); ?></td><!--affichage de prénom-->
                	<td><?php print($row['number_p']); ?></td><!--affichage de email-->
                <td><?php print($row['event_p']); ?></td><!--affichage de tél-->
					<td><?php print($row['booking_date']); ?></td><!--affichage de tél-->
					<td><?php print($row['amount_p']); ?></td><!--affichage de tél-->
					<td><?php print($row['transaction_ID']); ?></td><!--affichage de tél-->
					<td><?php print($row['t_status']); ?></td><!--affichage de tél-->

                	<td align="center">
					
                	<a href="delete.php?delete_id=<?php print($row['id']); ?>">
					<i class="glyphicon glyphicon-print">Print Bill</i>
					</a>
                	</td> 
                </tr>


    <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>

          
        
        </tbody>
      </table>

    </div>

          

            </div>

          

</body>
</html>