<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register!</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Default form login -->
<form class="text-center border border-light p-5" action="#" method="post">

<p class="h4 mb-4">Register !</p>

<!-- Email -->
<input type="text" id="name" class="form-control mb-4" placeholder="Name">

<!-- Password -->
<input type="text" id="desg" class="form-control mb-4" placeholder="Designation">

<input type="number" id="number" class="form-control mb-4" placeholder="Phone number">
        <!-- Forgot password -->
       
    </div>
</div>

<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" id="submit" type="submit">Register</button>

<!-- Register -->
<p>Register here for latest update from temple
</p>

</form>

<!-- Default form login -->
</body>
</html>
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
?>
<script>swal("Thank you!", "Your Registration Success!", "success");</script>
<?php
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>