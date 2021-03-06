<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= base_url() ?>/public/img/logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/font-awesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/styleshit.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title><?= SYSTEM_TITLE ?></title>
  </head>

	<body id = "bg-login">
	  <!-- <div class="container" id = "login-container">
	    <div class="row">
	      <div class="col-sm-10 col-md-7 col-lg-6 mx-auto">
	        <div class="card card-signin my-5" id = "login-card">
	          <div class="card-body" id="login-card-body">
	            <h2 class="card-title text-center"><img class ="img-fluid" id = "sisevms-logo"src ="<?= base_url() ?>/public/img/logo.png"><center style="color: white; font-family:roboto" >Technology Inventory System</h2> -->
                <!-- <img class ="img-fluid" id = "sisevms-logo"> -->
                <img class="wave" src="<?= base_url() ?>/public/img/wave.png">
	               <div class="container">
		                 <div class="img">
			                    <img src="<?= base_url() ?>/public/img/avatar2.png">
		             </div>
		             <div class="login-content">
                   <div>
			               <!-- <form action="<?= base_url() ?>"> -->
				                   <img src="<?= base_url() ?>/public/img/logo.png">
				                       <h2 class="title">Welcome</h2>
	            <hr>
	            <?php if(isset($_SESSION['error_login'])): ?>
	            <div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <?= $_SESSION['error_login']; ?>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<?php endif; ?>
	            <form class="form-signin" method="post" action="<?= base_url() ?>">
                <div class="form-label-group mb-2 mt-4">
                  
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text border border-white edited"><i class="fas fa-user-circle"></i></div>
                      </div>
                      <input type="text" name="username" id="inputUsername" class="form-control border border white edited" placeholder="Username">
                  </div>
	              </div>
                <div class="form-label-group mb-2 mt-2">
                  <!-- <label for="inputPassword">Password</label> -->
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text border border-white edited"><i class="fas fa-key"></i></div>
                      </div>
                      <input type="password" name="password" id="inputPassword" class="form-control border border white edited" placeholder="Password">
                  </div>
                </div>
	              <div class="custom-control custom-checkbox mb-4 ml-2">
	                <input type="checkbox" class="custom-control-input border border-success" id="customCheck1">
	                <label class="custom-control-label" id = "check-text" for="customCheck1">Remember password</label>
                  <label class = "float-md-right" id = "login-Forgot"><a href="#">Forgot Password?</a></label>
	              </div>

	              <button class="btn btn-lg"  id = "btn-login" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
	            </form>
	          </div>
	        </div>
	        <!-- <div class="container" id="footer-login">
				  <div class="row">
			        <div class="col-sm-12 pt-2">
			          <i class="fab fa-creative-commons"></i>
			          <p id="developer-login">Developed by IT Training and Solutions Engineering Center</p>
			          <p id="copy-statement-login">
			            Except where otherwise noted, content on this site is licensed under a Creative Commons Attribution 4.0 International license. Icons by The Noun Project.
			          </p>
			        </div>
			      </div>
			 </div> -->
	      </div>
	    </div>
	  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="<?= base_url() ?>/public/js/jquery-3.3.1.slim.min.js"></script> -->
    <!-- <script src="<?= base_url() ?>/public/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>/public/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/public/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/public/js/sweetalert2@9.js"></script>
    <script src="<?= base_url() ?>/public/js/myAlerts.js"></script> -->
    <script type="text/javascript" src="js/main.js"></script>
    <?= view('App\Views\theme\notification') ?>
  </body>
</html>
