<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Delivery- Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primar" style="background-image: url('<?php echo base_url(); ?>assets/img/bg_6.jpg');">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4" style="font-weight: 800">Admin Login</h1>
                  </div>
                  <p>
      <?php if (isset($error))
       {echo "<center><p class = 'text-danger' style='color:#FF0000;'>$error</p><center>";}?></p>


     <?php 
   $attributes = array('class' => 'form-horizontal', 'role' => 'form');
   echo form_open('index.php/user_authentication/user_login_process', $attributes); ?>

                     
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" value="<?php echo set_value('username'); ?>" name="username"  aria-describedby="emailHelp" placeholder="Enter User Name">
                      <span class = "text-danger"><?php echo form_error('username'); ?></span>

                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user"  value="<?php echo set_value('password'); ?>" name="password"  id="exampleInputPassword" placeholder="Enter Password">
                      <span class = "text-danger"><?php echo form_error('password'); ?></span>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                   <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                   
                   
                   <?php echo form_close(); ?>
                  <hr>
                 
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
