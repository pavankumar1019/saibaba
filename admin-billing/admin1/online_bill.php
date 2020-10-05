<?php
/*
  Author : Mohamed Aimane Skhairi
  Email : skhairimedaimane@gmail.com
  Repo : https://github.com/medaimane/crud-php-pdo-bootstrap-mysql
*/

include_once 'crud-php-pdo-bootstrap-mysql-master/dbconfig.php';


?>


<div class="container">

	<?php
	if(isset($_GET['deleted']))
	{
		?>
        <div class="alert alert-success">
    	Print Success! 
		</div>
        <?php
	}
	else
	{
		?>
        <div class="alert alert-danger">
    	Print Here! 
		</div>
        <?php
	}
	?>	
</div>

<div class="container">
 	
	 <?php
	 if(isset($_GET['delete_id']))
	 {
		
         $stmt = $DB_con->prepare("SELECT * FROM abhishekam_payment_dt WHERE id=:id");
         $stmt->execute(array(":id"=>$_GET['delete_id']));
         while($row=$stmt->fetch(PDO::FETCH_BOTH))
         {
             ?>

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
            <button type="button" onclick="location.href = 'video.php';" class="btn btn-danger btn-lg">Back to Home</button>

            </ul>
            </th>
            
        </tr>
    </tfoot>
  </tbody>
</table>
         <?php
	 }
	 ?>
</div>

<div class="container">
<p>
<?php
if(isset($_GET['delete_id']))
{
	?>
  	<form method="post">
    <!-- <input type="hidden" name="id" value="<?php echo $row['id']; ?>" /> -->
    <!-- <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; Yes</button> -->
    <!-- <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; No</a> -->
    </form>  
	<?php
}
else
{
	?>
    <a href="index.php" class="btn btn-large btn-success" style="float: right;><i class="glyphicon glyphicon-backward"></i> &nbsp; Return</a>
    <?php
}
?>
</p>
</div>	
<?php include_once 'footer.php'; ?>