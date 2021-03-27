<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="DM Shri Shirdi Sai Baba Temple | #Opp Old Food godown,KGF main Road,Bangarpet 563114,karnataka,India">
    <link rel="shortcut icon" href="img/om.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DM Shri Shirdi Sai Baba Temple | Bangarpet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./styles/style.css">
<script src="src/panchang.js"></script>
<script src="src/basic-panchanga.js"></script>
</head>
<body>
<nav class="navbar navbar-dark " style="background: #F95700FF;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <img src="./assets/baba2.png" width="70" alt="" srcset="">
  </div>
</nav>
<div class="collapse" id="navbarToggleExternalContent">
  <div class=" p-4" style="background: #F2AA4CFF;">
    <h5 class="text-white h4">DM Shri Shirdi Sai Baba Temple</h5>
    <span class="text-muted">Opp Old Food godown,KGF main Road,Bangarpet 563114,karnataka,India</span>
    <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Introduction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#aboutTemple">About Temple</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"aria-disabled="true">Image Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#" aria-disabled="true">Video Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#" aria-disabled="true">Online Services</a>
        </li>
      </ul>
  </div>
</div>
<section>
    <div class="container-fluid p-3" style="background: #D32E5EFF;">
        <div class="row">
        <?php
$imagesDirectory = "admin-uploads-to-website/insert-admin/images/";

if (is_dir($imagesDirectory))
{
	$opendirectory = opendir($imagesDirectory);
  
    while (($image = readdir($opendirectory)) !== false)
	{
		if(($image == '.') || ($image == '..'))
		{
			continue;
		}
		
		$imgFileType = pathinfo($image,PATHINFO_EXTENSION);
		
		if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
		{
      
      
?>
           <div class="col">
                 <div class="card">
               <?php echo "<img src='../admin-uploads-to-website/insert-admin/images/".$image."'> ";?>
                 </div>
        </div>                           
<?php





		}
    }
	
    closedir($opendirectory);
 
}
?>
          
        </div>
      </div>
 
    </section>
    <div class="container-fluid p-2" style="background: #F95700FF;" >
        <p style="text-align: center"> Copyright &copy;<script>document.write(new Date().getFullYear())</script>&nbsp;<a href="" style="color:black;">DM SHRI SHIRDI SAI BABA TEMPLE</a> All Rights Reserved</p>
    </div>
 
</body>
</html>