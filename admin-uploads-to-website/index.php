<?php
include_once('includes/header.php');
?>

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
                <?php

                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    }
                ?>
              </div>

                <form class="user" action="login.php" method="POST">

                    <div class="form-group">
                    <input type="email" name="user_email" class="form-control form-control-user" placeholder="Enter Email Address..." value="<?php if(isset($_COOKIE["user_email"])) { echo $_COOKIE["user_email"]; } ?>" required>
                    </div>
                    <div class="form-group">
                    <input type="password" name="user_password" class="form-control form-control-user" placeholder="Password" value="<?php if(isset($_COOKIE["user_password"])) { echo $_COOKIE["user_password"]; } ?>" required>
                    </div>
                    <div class="form-group">
                    <label for="login-remember"><input type="checkbox" id="remember" name="remember" <?php  if(isset($_COOKIE["user_email"])) { ?> checked <?php } ?>>Remember Me</label>
                    </div>
                    <button type="submit" name="login" value="Login"  class="btn btn-primary btn-user btn-block"> Login </button>
                    <hr>
                </form>


            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>
<?php include_once('inc/footer.php'); ?>

<?php
include('includes/scripts.php'); 
?>