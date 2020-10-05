<?php 
/*
  Author : Mohamed Aimane Skhairi
  Email : skhairimedaimane@gmail.com
  Repo : https://github.com/medaimane/crud-php-pdo-bootstrap-mysql
*/
?>
<?php include_once 'dbconfig.php'; ?> <!--inclure de l'instance de la class crud-->
<?php include_once 'header.php'; ?> <!--inclure le header de la page -->

<div class="container">
    <!--lien vers la page d'ajoute d'utilisateur-->
    <div class="row mx-auto">
    <a href="add-data.php" class="btn btn-large btn-info">
        <i class="glyphicon glyphicon-plus"></i> &nbsp; Offline Data
      </a>
      <input id="myInput"  class="form-control mt-25" type="text" placeholder="Search..">
</div>
</div>
<br />
<div class="container"> 
    <!--creation du tableau-->
	<table class='table table-bordered table-responsive' id="myTable"> 
        <tr>
            <th>N°</th>
            <th>First Name </th>
            <th>Last Name</th>
            <th>E - mail</th>
            <th>Phone Number</th>
            <th>Event </th>
            <th>Event Date </th>
            <th>Amount </th>
            <th>State </th>
            <th>District </th>
            <th>Address </th>
            <!-- <th colspan="2" align="center">Actions</th> -->
        </tr>
        <?php    
		  $crud->dataview("SELECT * FROM tbl_Devotees_Data order by id desc
          " ); // l'appele du méthode d'affichage.
	    ?>
    </table> 
</div>
<?php include_once 'footer.php'; ?> <!--inclure le footer de la page -->