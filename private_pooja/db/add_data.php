<?php
include("config.php");
try {
    $sql = "INSERT INTO abhishekam_payment_dt (id, transaction_ID, full_name, email_ID, address_p, number_p, event_p, booking_date, t_status, message_p, paydate)
    VALUES ('', '$txnid', '$firstname', '	$email  ','  $udf4	',' $mobile','$productInfo','$udf5','$status','$msg','')";
    if ($mysqli->query($sql) === TRUE) {
        $mssg="Thank You!";
      } 
      else {
          $mssg="error";
      }
}
catch (MySQLDuplicateKeyException $e) {
    // duplicate entry exception
    $e->getMessage();
}
$mysqli->close();
?>