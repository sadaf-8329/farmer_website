 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Farmer- Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

<?php include "navbar2.php";?>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">


            <div class="row">
              <div class="col-lg-2 d-none d-lg-block "></div>
              <div class="col-lg-7">
                <div class="p-5">
                 <div class="text-center">
                      <!-- <img src="<?php echo base_url() . 'assets/img/logo1.png" class="img-circle width-80'; ?>"> <br> -->


<div class="text-center">
<!-- <?php if ($this->session->flashdata('msg')) {
    ?>
  <div class="alert alert-success  text-gray-900 mb-4">

    <?php echo $this->session->flashdata('msg') ?>
  </div>
<?php
} else
if ($this->session->flashdata('error')) {
    ?>
  <div class="alert alert-danger text-gray-900 mb-4">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo $this->session->flashdata('error') ?>
  </div>
<?php }?> -->


<?php if ($this->session->flashdata('error')) {?>

 <div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo $this->session->flashdata('error') ?>
  </div>
<?php }?>

</div>



<!--               <div class="text-center">
<?php if ($this->session->flashdata('danger')) {?>
 <div class="alert alert-danger">
    <?php echo $this->session->flashdata('danger') ?>
  </div>
<?php }?>
</div>   -->
<!-- <?php
if ($this->session->flashdata('true')) {
    ?>
   <div class="alert alert-success">
     <?php echo $this->session->flashdata('true'); ?>
<?php
} else if ($this->session->flashdata('err')) {
    ?>
 <div class = "alert alert-success">
   <?php echo $this->session->flashdata('err'); ?>
 </div>
<?php }?> -->






                    <h3 class="text-white">Welcome Back!</h3>
                  </div>
                <br>
                  <form method="post" action="<?php echo site_url('farmer/redirectpage'); ?>" class="user">

                    <div class="form-group">
                        <i class="fas fa-envelope prefix text-white"></i>
                      <label class="text-white"><h5>Email ID:</h5></label>
                      <input type="email" name="email" class="form-control form-control-user" id="email" placeholder="Enter Email Id" required>
                     <!--  <?php echo form_error('User ID'); ?> -->
                        <div class="valid-feedback">Valid.</div>
                   <div class=" invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                   <i class="fas fa-lock prefix text-white"></i>
                      <label class="text-white"><h5>Password:</h5></label>
                      <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Enter Password" required>
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

              <!-- Button to Open the Modal -->
<!-- <button type="button" class="btn bg-gradient-success btn-user btn-block text-white" data-toggle="Modal" data-target="#mymodal">
  Login
</button> -->

<!-- The Modal -->
<!-- <div class="Modal" id="mymodal">
  <div class="modal-dialog">
    <div class="modal-content"> -->

      <!-- Modal Header -->
   <!--    <div class="modal-header">
        <h4 class="modal-title">Successfully Login!</h4>
        <button type="button" class="close" data-dismiss="Modal">&times;</button>
      </div> -->

      <!-- Modal body -->
   <!--   <div class="modal-body">
    Select "OK" For Continue.
      </div> -->

      <!-- Modal footer -->
<!--     <div class="modal-footer">
      <input type="submit" name="loginbtn" value="OK" class="btn btn-success  text-white"> -->
        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button> -->
  <!--     </div>

    </div>
  </div>
</div>
           -->        </div>
                    <div class="text-center">
                    <a class="small" href="<?php echo site_url('farmer/resetpassword/page'); ?>"><h6 class="text-white">Forgot Password?</h6></a>
                  </div>

                  </form>
                  <hr color="black">
                  <div class="text-center">

                    <span><h6 class="text-white">If new user?</h6></span>
                    <a class="small" href="<?php echo site_url('farmer/register/page'); ?>"><h6 class="text-white">Create an Account!</h6></a>
                  </div>
                </div>
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
