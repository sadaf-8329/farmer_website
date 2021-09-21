<?php
if (!$this->session->userdata('email_add')) {
    redirect(base_url() . "admin_controller");
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

  <title> Admin - Seeproducts</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
<!--  <link  href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
</head>

<body data-spy="scroll" data-target="#navbarResponsive" class="bg-gradient-success">
<?php include "navbar4.php";?>
<br>
<div class="container">
<div class="text-center">
<?php if ($this->session->flashdata('delete')) {?>
 <div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo $this->session->flashdata('delete') ?>
  </div>
<?php }?>
</div>
</div>
<!--dropdown mainues-->
<div class="container">
 <div class="text-center">
<div class="container">
  <div class="col-md-12">


<?php if ($this->session->flashdata('success')) {?>

  <div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo $this->session->flashdata('success') ?>
  </div>
<?php }?>
</div>
</div>
</div>
</div>


<div class="text-center">
<h4 class="text-white"><b>Product Details!</b></h4>

<!-- <div class="container">
<div class="col-md-12">

<div class="text-left">
  <form  class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" id="myInput" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" autocomplete="off">
              <div class="input-group-append">
                <button class="btn bg-gradient-success" type="submit">
                  <i class="fas fa-search fa-sm text-white"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
</div> -->

</div>
<br>


 <div class="container">
  <!--   <div class="col-md-12"> -->
      <div class="col-lg-12">
  <!--   <table  border="1"  class="table table-bordered table-striped table-responsive-stack" id="myTable"> -->
             <div class="col-lg-1 d-none d-lg-block "></div>
              <div class="table-responsive table--no-card m-b-30">
             <!-- <div class="col-lg-1">
                <div class="p-2">-->
 <table border="1" class="table table-bordered table-striped table-responsive-stack" id="myTable">

        <tr>

              <th class="text-white text-center">Name</th>
              <th class="text-white text-center">Mobile No.</th>
              <th class="text-white text-center">Email Id</th>
               <th class="text-white text-center">Address</th>
              <th class="text-white text-center">PIN
							<input id="myInput" type="text"  placeholder="Search pin" >
							</th>
              <th class="text-white text-center">Vegetables Name
							<input id="myInput" type="text" placeholder="Search vegetables">
							</th>
              <th class="text-white text-center">Date
							<input id="myInput" type="date">
							</th>
              <th class="text-white text-center">Quantity(Kg)</th>
              <th class="text-white text-center">Product Images</th>

              <th class="text-white text-center">Delete</th>
            </tr>

  <?php
foreach ($this->admin_model->displayall() as $data) {
    ?>
        <tr>

           <td class="text-gray-900 mb-4 text-center"><?php echo $data['fullname']; ?></td>
           <td class="text-gray-900 mb-4 text-center"><?php echo $data['mobileno']; ?></td>
           <td class="text-gray-900 mb-4 text-center"><?php echo $data['email']; ?></td>
             <td class="text-gray-900 mb-4 text-center"><?php echo $data['address']; ?></td>
           <td class="text-gray-900 mb-4 text-center"><?php echo $data['pin']; ?></td>
           <td class="text-gray-900 mb-4 text-center"><?php echo $data['vegname']; ?></td>
           <td class="text-gray-900 mb-4 text-center"><?php echo $data['date']; ?></td>
           <td class="text-gray-900 mb-4 text-center"><?php echo $data['quantity']; ?></td>
           <td class="text-center"><img src="<?php echo base_url() . '/assets/img/' . $data['image']; ?>"  alt="<?php echo base_url() . '/assets/img/' . $data['image']; ?>" height="90px" width="100px"></td>

           <td>
        <a href="<?php echo site_url() . "admin/delete/products?Id=" . $data['Id']; ?>">
      <button class="btn btn-danger">Delete</button></a></td>
</tr>
 <?php
}
?>
</table>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- search data -->
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>




</body>

</html>
