<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin- Login</title>

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


            <div class="row">
              <div class="col-lg-2 d-none d-lg-block "></div>
              <div class="col-lg-7">
                <div class="p-5">

                  <div class="text-center">
                   <div class="container">
<div class="text-center">

<?php if ($this->session->flashdata('danger')) {?>

 <div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo $this->session->flashdata('danger') ?>
  </div>
<?php }?>
</div>
</div>




                    <h3 class="text-white">Admi Login!</h3>
                  </div>
                <br>
                  <form method="post" action="<?php echo site_url('admin/view/products'); ?>" class="user">

                    <div class="form-group">
                       <i class="fas fa-envelope prefix text-white"></i>
                      <label class="text-white"><h5>Email ID:</h5></label>
                      <input type="email" name="email_add" class="form-control form-control-user" id="email_add" placeholder="Enter Email Id" required>
                     <!--  <?php echo form_error('User ID'); ?> -->
                        <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                      <i class="fas fa-lock prefix text-white"></i>
                      <label class="text-white"><h5>Password:</h5></label>
                      <input type="password" name="enterpassword" class="form-control form-control-user" id="enterpassword" placeholder=" Enter Password" required>
                        <!--<?php echo form_error('Password'); ?> -->
                           <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    </div>
                    <style>
                    input[type=submit]:hover {
                     opacity: 0.8;
                           }
                    </style>
                    <div class="form-group">
            <input type="submit" name="loginbtn" value="login" class="btn bg-gradient-success btn-user btn-block text-white">
                </div>

                    <div class="text-center">
                    <a class="small" href="<?php echo site_url('admin/resetpassword/page'); ?>"><h6 class="text-white">Forgot Password?</h6></a>
                  </div>

                  </form>
                  <hr color="black">
                  <div class="text-center">

                    <span><h6 class="text-white">If new user?</h6></span>
                    <a class="small" href="<?php echo site_url('admin/register/page'); ?>"><h6 class="text-white">Create an Account!</h6></a>
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
