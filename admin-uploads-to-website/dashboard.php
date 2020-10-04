<?php
session_start();
if(!$_SESSION['user_email']){
  header("location: index.php");
  die();
}
include('includes/header1.php');
include('includes/navbar.php');
?>
 <div class="row">
 	<div class="col-md-12">
   <blockquote class="blockquote text-center">
  <p class="mb-0">Welcome to DM Shri Shirdi Sai Baba Temple Trust.</p>
  <footer class="blockquote-footer">A famous Temple in <cite title="Source Title"> Kolar </cite></footer>
</blockquote>
 	</div>
 </div>

<!-- Begin Page Content -->
<div class="container-fluid ">
<!-- Dash Board  -->
<div class="row mb-3">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">DM Shri Shirdi Sai Baba Temple Trust</h5>
        <p class="card-text">Upload the Photos to the Website image gallery.</p>
        <a href="buttons.php" class="btn btn-primary">Upload Images</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">DM Shri Shirdi Sai Baba Temple Trust</h5>
        <p class="card-text">Upload the Video to the Website image gallery.</p>
        <a href="video.php" class="btn btn-primary">Upload Video</a>
      </div>
    </div>
  </div>
</div>



  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>