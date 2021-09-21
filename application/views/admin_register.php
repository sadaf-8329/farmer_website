<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Registration</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

<?php include "navbar3.php";?>


  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

      <!--   <div class="card o-hidden border-0 shadow-lg my-5"> -->
          <!-- <div class="card-body p-0"> -->
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-2 d-none d-lg-block "></div>
              <div class="col-lg-7">
                <div class="p-5">
                  <div class="text-center">

                    <h3 class="text-white">Create an Account!</h3>
                  </div>
                <br>
                  <form method="post" action="<?php echo site_url('admin/register/redirectpage'); ?>"  class="user">

                   <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                     <i class="fas fa-user prefix text-white"></i>
                    <label><h5 class="text-white">Full Name*</h5></label>
                    <input type="name" name="fullname" class="form-control form-control-user" id="fullname" placeholder="Enter Full Name" required>
                      <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                  </div>

                  <div class="col-sm-6">
                          <i class="fas fa-mobile prefix text-white"></i>
                     <label><h5 class="text-white">Mobile No.*</h5></label>
                    <input type="number" name="mobileno" class="form-control form-control-user" id="mobileno" placeholder="Enter mobile No." required>
                      <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                </div>

                <div class="form-group">
                  <i class="fas fa-envelope prefix text-white"></i>
                   <label><h5 class="text-white">Email ID*</h5></label>
                  <input type="email" name="email_add" class="form-control form-control-user" id="email_add" placeholder="Enter Email Address" required>
                    <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <i class="fas fa-lock prefix text-white"></i>
                     <label><h5 class="text-white">Password*</h5></label>
                    <input type="password" name="enterpassword" class="form-control form-control-user" id="enterpassword" placeholder="Enter Password" required>
                      <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                  </div>

                  <div class="col-sm-6">
                    <i class="fas fa-lock prefix text-white"></i>
                     <label><h5 class="text-white">Confirm Password*</h5></label>
                    <input type="password" name="confirmpassword" class="form-control form-control-user" id="confirmpassword" placeholder="Enter Confirm Password" required>
                      <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                    </div>

                     <br>
                     <style>
                    button[type=submit]:hover {
                     opacity: 0.8;
                           }
                    </style>
                <button class="btn bg-gradient-success btn-user btn-block text-white" type="submit"> Register Account</button>


              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>


 <footer>
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span class="text-white">Copyright © 2020  ismartconnect.com, All rights reserved</span>
          </div>
        </div>
      </footer>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>
