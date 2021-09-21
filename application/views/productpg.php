<?php
if (!$this->session->userdata('email')) {
    redirect(base_url() . "farmer_controller");
}
?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Farmer- products page</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<!-- <body class="bg-gradient-success"> -->
<body data-spy="scroll" data-target="#navbarResponsive" class="bg-gradient-success">
<?php include "navbar5.php";?>







   <div class="container">
 <!-- Outer Row -->
    <div class="row justify-content-center">
<div class="col-xl-10 col-lg-12 col-md-9">
<!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-2 d-none d-lg-block "></div>
              <div class="col-lg-7">
                <div class="p-5">
              </div>

<div class="text-center">
<?php if ($this->session->flashdata('msg')) {?>
  <div class="alert alert-success  text-gray-900 mb-4">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo $this->session->flashdata('msg') ?>
  </div>
<?php }?>
</div>
<br>
                      <div class="text-center">
                         <form action="<?php echo site_url('farmer/productpage'); ?>" class="user">
           <a href="<?php echo site_url('add/products'); ?>" class="btn bg-gradient-success btn-user btn-block "><h5 class="text-white"> <i class="fa fa-plus"> </i> Add Today's Products  </h5>
                    </a>
                  <br>

                   <a href="<?php echo site_url('view/all/products'); ?>" class="btn bg-gradient-success btn-user btn-block"> <h5 class="text-white"> <i class="fa fa-eye"> </i> See Your Products  </h5> </a>
                         </form>
                   </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


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
