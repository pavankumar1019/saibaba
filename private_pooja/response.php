<?php

$servername = "localhost";
$username = "root";
$password = "Pavan1019";
$dbname = "sai";
$conn = new mysqli($servername, $username, $password, $dbname);

?>
<!-- Scuccess Page -->
<?php
$postdata = $_POST;
$msg = '';
if (isset($postdata ['key'])) {
	$key				=   $postdata['key'];
	$salt				=   "";
	$txnid 				= 	$postdata['txnid'];
    $amount      		= 	$postdata['amount'];
	$productInfo  		= 	$postdata['productinfo'];
	$firstname    		= 	$postdata['firstname'];
	$email        		=	$postdata['email'];
  $udf4				=   $postdata['udf4'];
  $udf5				=   $postdata['udf5'];
	$mihpayid			=	$postdata['mihpayid'];
	$status				= 	$postdata['status'];
  $resphash				= 	$postdata['hash'];
  $mobile				= 	$postdata['phone'];
	//Calculate response hash to verify	
	$keyString 	  		=  	$key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'|||||'.$udf4.'|'.$udf5.'|||||';
	$keyArray 	  		= 	explode("|",$keyString);
	$reverseKeyArray 	= 	array_reverse($keyArray);
	$reverseKeyString	=	implode("|",$reverseKeyArray);
	$CalcHashString 	= 	strtolower(hash('sha512', $salt.'|'.$status.'|'.$reverseKeyString));
	
	
	if ($status == 'success'  && $txnid!="") {
    $msg = "Transaction Successful &#128578 ";
    //Do success order processing here...
    $txnid_p=$txnid;
    $firstname_p = $firstname;
    $email_p=$email;
    $udf4_p=$udf4;
    $mobile_p=$mobile;
    $productInfo_p=$productInfo;
    $udf5_p=$udf5;
    $status_p=$status;
    $msg_p=$msg;
    $amount_p=$amount;




    $sql = "INSERT INTO abhishekam_payment_dt ( transaction_ID, full_name, email_ID, address_p, number_p, event_p, booking_date, t_status, message_p,amount_p)
    VALUES ('$txnid_p', '$firstname_p', '$email_p', '$udf4_p','$mobile_p','$productInfo_p','$udf5_p','$status_p','$msg_p','$amount_p')";
  if ($conn->query($sql) === TRUE) {
    $mssg="Thank You!!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
   header("Location: index.php");
  }
  $conn->close();

}

}
else exit(0);
?>


<!-- Success bill template -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>DM Shri Shirdi Sai </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</head>
<style type="text/css">
	.main {
		margin-left:30px;
		font-family:Verdana, Geneva, sans-serif, serif;
	}
	.text {
		float:left;
		width:180px;
	}
	.dv {
		margin-bottom:5px;
	}
</style>
<body>

	<!-- <div>
    	
    </div>
    <div>
    	<h3>DM Shri Shirdi Sai </h3>
    </div>
	
    <div class="dv">
    <span class="text"><label>Merchant Key:</label></span>
    <span><?php echo $key; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Merchant Salt:</label></span>
    <span><?php echo $salt; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Transaction/Order ID:</label></span>
    <span><?php echo $txnid; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Amount:</label></span>
    <span>3</span>    
    </div>
    
    <div class="dv">
    <span class="text"><label>Event Booked :</label></span>
    <span><?php echo $productInfo; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>First Name:</label></span>
    <span><?php echo $firstname; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Email ID:</label></span>
    <span><?php echo $email; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Mihpayid:</label></span>
    <span><?php echo $mihpayid; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Hash:</label></span>
    <span><?php echo $resphash; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Transaction Status:</label></span>
    <span><?php echo $status; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Message:</label></span>
    <span><?php echo $msg; ?></span>
    </div>
</div> -->
<div class="d-flex justify-content-center">
<div class="w-75  table-responsive-sm ">

<table class="table">
  <thead>
    <tr >
    <td  style="text-align: center;" colspan="2">
    <img width="170em" src="images/81tJnr3gLaL._SX466_.jpg" /><br>
    <h3>DM Shri Shirdi Sai Baba Temple </h3>
    <h6>(Opp Old Food godown,KGF main Road,Bangarpet 563114,karnataka,India)</h6>

    </td>
           
        </tr>

        <tr >
    <td  style="text-align:right;" colspan="2">
     <h6 id="date">Date:-</h6>
    </td>
     </tr>

  </thead>
  <tbody>
    <tr>
     
      <th scope="col">Transaction ID</th>
      <td><?php echo $txnid; ?></td>
   
    </tr>
    <tr>
    
    <th scope="col">Full Name</th>
      <td><?php echo $firstname; ?></td>
  
    </tr>
    <tr>
    <th scope="col">Email ID</th>
      <td><?php echo $email; ?></td>
    
    </tr>
    <th scope="col">Address</th>
      <td><?php echo $udf4; ?> </td>
     
    </tr>

    </tr>
    <th scope="col">Mobile number</th>
      <td><?php echo $mobile; ?> </td>
     
    </tr>

    <th scope="col"> Event and Date of Booking</th>
      <td><?php echo $productInfo; echo '&nbsp Date:-'.$udf5; ?></td>
   
    </tr>
    <th scope="col">Amount</th>
      <td><?php echo $amount; ?>Rs</td>
  
    </tr>
    
    <th scope="col">Transaction Status</th>
      <td><?php echo $status; ?> </td>
      
    </tr>
    <th scope="col">Message</th>
      <td><?php echo $msg; ?><?php echo $mssg; ?> </td>
      </tr>

    <tfoot>
        <tr>
            <th colspan="2">
            <ul>
            <li>Note:- Take Print of the Recipt and Carry with you while visiting temple.</li>
            <li>Note:- Recipt is not valid after the booking date</li>
            <button type="button" onclick="window.print()" class="btn btn-primary btn-lg">Print</button>
            </ul>
            </th>
            
        </tr>
    </tfoot>
  </tbody>
</table>
</div>
</div>
</body>
<script>
var d=Date();
document.getElementById("date").innerHTML += d;
</script>
</html>
	