<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Shri Shirdi Sai Baba Temple</title>
<!-- 

Highway Template

https://templatemo.com/tm-520-highway

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

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

    <nav>
        <div class="logo">
            <a href="index.html">Video-<em>Gallery</em></a>
        </div>
      <div class="menu-icon">
        <span></span>
      </div>
    </nav>

    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1 style="font-size: 8vw;"><em>Shri Shirdi Sai Baba Temple</em></h1>
              <!-- <p>FREE CSS TEMPLATE by templatemo</p> -->
              <div><img class="om" src="img/om.png" width="150px"></div>
              <p>Om Sai Ram</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png" alt=""></a>
                </div>    
            </div>
        </div>
        <video autoplay="" loop="" muted>
        	<source src="highway-loop.mp4" type="video/mp4" />
        </video>
    </div>


    <div class="grid-portfolio" id="portfolio">
        <div class="container">
            <div class="row">






<!-- my sql fetch videos by pavan kumar -->
<?php
$servername = "localhost";
$username = "root";
$password = "Pavan1019";
$dbname = "sai";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, first_name, last_name FROM tbl_sample";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <div class="container col-md-6">
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
                <p>PK|P developer</p>
            </div>
        </div>
    </footer>


     <!-- Modal button -->
     <div class="popup-icon">
        <button id="modBtn" class="modal-btn"><img src="img/contact-icon.png" alt=""></button>
      </div>  
  
      <!-- Modal -->
      <div id="modal" class="modal">
        <!-- Modal Content -->
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h3 class="header-title">Say hello to <em>To Temple Priest</em></h3>
            <div class="close-btn"><img src="img/close_contact.png" alt=""></div>    
          </div>
          <!-- Modal Body -->
          <div class="modal-body">
            <div class="col-md-6 col-md-offset-3">
              <form id="contact" action="" method="post">
                  <div class="row">
                      <div class="col-md-12">
                        <fieldset>
                          <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                        </fieldset>
                      </div>
                      <div class="col-md-12">
                        <fieldset>
                          <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                        </fieldset>
                      </div>
                      <div class="col-md-12">
                        <fieldset>
                          <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-md-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                        </fieldset>
                      </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  
      
  
      <section class="overlay-menu">
        <div class="container">
          <div class="row">
            <div class="main-menu">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="single-post.html">Introduction</a>
                    </li>
                    <li>
                        <a href="index.html#about" >About Us</a>
                    </li>
                    <li>
                        <a href="grid.php">Photo-Gallery</a>
                    </li>
                    <li>
                        <a href="video.php">Video-Gallery</a>
                    </li>
                    <li>
                        <a href="donate.html">Donate</a>
                    </li>
                    <li>
                        <a href="#">Cultural Registration Form</a>
                    </li>
                </ul>
                <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-youtube"></a>
  <a href="#" class="fa fa-instagram"></a>
  <a href="#" class="fa fa-pinterest"></a>
  <a href="#" class="fa fa-snapchat-ghost"></a>
  <a href="#" class="fa fa-skype"></a>
  <a href="#" class="fa fa-android"></a>
  <a href="#" class="fa fa-dribbble"></a>
  <a href="#" class="fa fa-vimeo"></a>
  <a href="#" class="fa fa-tumblr"></a>
  <a href="#" class="fa fa-vine"></a>
  <a href="#" class="fa fa-foursquare"></a>
  <a href="#" class="fa fa-stumbleupon"></a>
  <a href="#" class="fa fa-flickr"></a>
  <a href="#" class="fa fa-yahoo"></a>
  <a href="#" class="fa fa-reddit"></a>
  <a href="#" class="fa fa-rss"></a>
                <p>Love one another and help others to rise to the higher levels, simply by pouring out love. Love is infectious and the greatest healing energy.</p>
            </div>
          </div>
        </div>
      </section>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
