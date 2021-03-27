<?php
include('../dbconnection/db.php'); 
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Shri Shirdi Sai Baba Temple</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../styles/style.css">
        
        <link rel="stylesheet" href="../css/fontAwesome.css">
        <link rel="stylesheet" href="../css/light-box.css">
        <link rel="stylesheet" href="../css/templatemo-style.css">
          <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <style>
            .fa {
              padding: 20px;
              font-size: 30px;
              width: 50px;
              text-align: center;
              text-decoration: none;
              margin: 5px 2px;
            }
            
            .fa:hover {
                opacity: 0.7;
            }
            
            .fa-facebook {
              background: #3B5998;
              color: white;
            }
            
            .fa-twitter {
              background: #55ACEE;
              color: white;
            }
            
            .fa-google {
              background: #dd4b39;
              color: white;
            }
            
            .fa-linkedin {
              background: #007bb5;
              color: white;
            }
            
            .fa-youtube {
              background: #bb0000;
              color: white;
            }
            
            .fa-instagram {
              background: #125688;
              color: white;
            }
            
            .fa-pinterest {
              background: #cb2027;
              color: white;
            }
            
            .fa-snapchat-ghost {
              background: #fffc00;
              color: white;
              text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            }
            
            .fa-skype {
              background: #00aff0;
              color: white;
            }
            
            .fa-android {
              background: #a4c639;
              color: white;
            }
            
            .fa-dribbble {
              background: #ea4c89;
              color: white;
            }
            
            .fa-vimeo {
              background: #45bbff;
              color: white;
            }
            
            .fa-tumblr {
              background: #2c4762;
              color: white;
            }
            
            .fa-vine {
              background: #00b489;
              color: white;
            }
            
            .fa-foursquare {
              background: #45bbff;
              color: white;
            }
            
            .fa-stumbleupon {
              background: #eb4924;
              color: white;
            }
            
            .fa-flickr {
              background: #f40083;
              color: white;
            }
            
            .fa-yahoo {
              background: #430297;
              color: white;
            }
            
            .fa-soundcloud {
              background: #ff5500;
              color: white;
            }
            
            .fa-reddit {
              background: #ff5700;
              color: white;
            }
            
            .fa-rss {
              background: #ff6600;
              color: white;
            }
            </style>





    </head>

<body>

<nav class="navbar navbar-dark " style="background: #F95700FF;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <img src="../assets/baba2.png" width="70" alt="" srcset="">
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

    <div class="grid-portfolio" id="portfolio">
        <div class="container">
            <div class="row">






<!-- my sql fetch videos by pavan kumar -->
<?php

$sql = "SELECT id, first_name, last_name FROM tbl_sample";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <div class="container col-md-6 m-2">
    <div class="embed-responsive embed-responsive-16by9">
                                <?php echo $row["first_name"];?>
  </div>
                   </div>
   
   <?php


  }
} else {
  echo "0 results";
}
$conn->close();
?>
      
          
        </div>
    </div>


    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
            <p style="text-align: center"> Copyright &copy;<script>document.write(new Date().getFullYear())</script>&nbsp;<a href="" style="color:black;">DM SHRI SHIRDI SAI BABA TEMPLE</a> All Rights Reserved</p>
            </div>
        </div>
    </footer>


      </section>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="../js/vendor/bootstrap.min.js"></script>
    
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>

</body>
</html>
