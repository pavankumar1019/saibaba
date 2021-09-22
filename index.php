<!-- header includes -->
<?php include 'includes/header.php' ?>

    <section class="p-0">
    <?php $page = isset($_GET['page']) ? $_GET['page']:'home' ?>
                <?php
            $title = isset($_GET['page']) ? ucwords(str_replace("_", ' ', $_GET['page'])) : "Home";
             ?>
              <?php 
            if(!file_exists('./pages/'.$page.".php")){
              include './404.html';
            }else{
            include './pages/'.$page.'.php';
            }
          ?>
          <!-- menu active function -->
          <?php
function active($currect_page){
    $url= isset($_GET['page']) ? $_GET['page']:'home';
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}
?>
    </section>

    <!-- Footer includes -->
 <?php include 'includes/footer.php' ?>
