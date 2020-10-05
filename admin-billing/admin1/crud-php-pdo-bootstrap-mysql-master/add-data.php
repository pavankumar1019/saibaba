<?php
/*

*/
$connect = new PDO("mysql:host=localhost; dbname=u430139865_ydyp", "u430139865_ydyp", "pavan5639");
include_once 'dbconfig.php'; 
 // include l'instance de la class crud.
if(isset($_POST['btn-save'])){ // test sur le bouton. 
	$fname = $_POST['first_name']; // affectation des valeur evoier par la method post.
	$lname = $_POST['last_name'];
    $email = $_POST['email_id'];
    $contact = $_POST['contact_no'];
    $event = $_POST['event'];
    $event_date = $_POST['event_date'];
    $amount = $_POST['amount'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $address = $_POST['address'];

	if($crud->create($fname,$lname,$email,$contact,$event,$event_date,$amount,$state,$district,$address)){ // test sur l'execution du requete, 
      //catch exception
      
      header("Location: add-data.php?inserted");  
        // echo 'Message: ' .$e->getMessage();
        // header("Location: add-data.php?failure"); 
   
   // si tout passe bien returne true, et on recharge la page
}else{
    header("Location: add-data.php?failure"); 
}
}
?>
<?php include_once 'header.php'; ?>
<?php
if(isset($_GET['inserted'])){ // alors si on a on paramétre "inserted", on mets un message:
	?>
    <div class="container">
	   <div class="alert alert-info">
        success!! <!-- le message a afficher avec un style de bootstrap de success--> 
	   </div>
	</div>
    <?php
}else if(isset($_GET['failure'])){ // et sinon (on a on paramétre "failure"), on mets u messaga:
	?>
    <div class="container">
	   <div class="alert alert-warning">
        Error in insertion <!--le message-->
        <script>
   var divToPrint=document.getElementById("myTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
        </script>

	   </div>
	</div>
    <?php
    }
?>

<div class="container">
	<form method='post'><!--creation de la form avec la method post-->
    <table class='table table-bordered' id="myTable1">
        <tr>
            <td>First Name</td><td><input type='text' name='first_name' class='form-control' required></td>
        </tr>
        <tr>
            <td>Last Name</td><td><input type='text' name='last_name' class='form-control' required></td>
        </tr>
        <tr>
            <td>E - mail</td><td><input type='text' name='email_id' class='form-control'></td>
        </tr>
        <tr>
            <td>Phone number</td><td><input type='text' name='contact_no' class='form-control' required></td>
        </tr>
        <tr>
            <td>Event</td><td><select class="form-control custom-select" name="event" required>
  <option selected>Select Event</option>
  <option value="Donate To Temple">Donate To Temple</option>
  <option value="Pooja Booking">Pooja Booking</option>
  <option value="Abhishekam & Archana">Abhishekam & Archana</option>
</select></td>
        </tr>
        <tr>
            <td>Event Date</td><td><input type='date' name='event_date' class='form-control' required></td>
        </tr>
        <tr>
            <td>Amount</td><td><input type='text' name='amount' class='form-control' required></td>
        </tr>
        <tr>
            <td>State</td><td><select name="state" id="state" class="form-control">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select></td>
        </tr>
        <tr>
            <td>District</td><td><input type='text' name='district' class='form-control' required></td>
        </tr>
        <tr>
            <td>Address with Post<br>(village/Area/taluk/post)</td><td> <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea></td>
        </tr>
        <tr>
            <td colspan="2">
            <!--btn-save : button de confirmation-->
            <button type="submit" class="btn btn-primary" name="btn-save">
    		<span class="glyphicon glyphicon-plus"></span>Add and Print Bill</button>
            <!--lien de retour vers l'index-->  
            <a href="index.php" class="btn btn-large btn-success" style="float: right;">
            <i class="glyphicon glyphicon-backward"></i> &nbsp; Report</a>
            </td>
        </tr>
    </table><!--fin du tableau-->
</form><!--fin de form-->
</div>
<?php include_once 'footer.php'; ?>