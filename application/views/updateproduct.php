<?php 
if(!$this->session->userdata('email'))
{
  redirect (base_url()."farmer_controller");
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

  <title>Farmer - Update products page</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">
<?php include "navbar5.php"; ?>
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
                    <!--   <img src="<?php echo base_url().'assets/img/logo1.png" class="img-circle width-80';?>"> <br> -->

                    <h3 class="text-white">Update Products!</h3>

                  </div>
                <br>
                  <form action="<?php echo site_url('farmer_controller/update_products');?>" class="user"  method="post" enctype="multipart/form-data">
                
              <input type="hidden" name="Id" value="<?php echo $_GET['Id'];?>">
               
                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label class="text-white">Full Name*:</label>
                    <input type="text" name="fullname" class="form-control form-control-user" id="fullname" placeholder="Enter Full Name" required>
                    <div class="valid-feedback">Valid.</div>
                   <div class=" invalid-feedback">Please fill out this field.</div>
                    </div>
                  
                  <div class="col-sm-6">
                     <label class="text-white">Mobile No.*:</label>
                    <input type="number" name="mobileno" class="form-control form-control-user" id="mobileno" placeholder="Enter mobile No." required>
                    <div class="valid-feedback">Valid.</div>
                   <div class=" invalid-feedback">Please fill out this field.</div>
                    </div>
                  
                </div>

                <div class="form-group">
                   <label class="text-white">Email ID*:</label>
                  <input type="email" name="email" class="form-control form-control-user" id="email" placeholder="Enter Email Address" required>
                  <div class="valid-feedback">Valid.</div>
                   <div class=" invalid-feedback">Please fill out this field.</div>
                    
                </div>

               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                   <label class="text-white">Vegetables Name*:</label>
                      <input type="text" class="form-control form-control-user" id="vegname" name="vegname" placeholder="Enter Vegetable Name" required>
                      <div class="valid-feedback">Valid.</div>
                   <div class=" invalid-feedback">Please fill out this field.</div>
                    </div>
                   
                  

                   <div class="col-sm-6">
                      <label class="text-white">Quantity(Kg)*:</label>
                      <input type="number" class="form-control form-control-user" id="quantity" name="quantity" placeholder="Enter Quantity" required>
                      <div class="valid-feedback">Valid.</div>
                   <div class=" invalid-feedback">Please fill out this field.</div>
                    
                   
                    </div> 
                      </div>



                   <div class="form-group">
                        <label for="inputPassword3" class="text-white">Date*:</label>
                       <div class="form-control-material">
                            <input type="date" class="form-control form-control-user" id="date" name="date" required>
                            <div class="valid-feedback">Valid.</div>
                   <div class=" invalid-feedback">Please fill out this field.</div>
                  
                          </div>
                        </div>
                      
                    <div class="form-group row">
                       <div class="col-sm-6 mb-3 mb-sm-0">
                      <label class="text-white">Address*:</label>
                      <input type="text" class="form-control form-control-user" id="address" name="address" placeholder="Enter Address" required>
                      <div class="valid-feedback">Valid.</div>
                   <div class=" invalid-feedback">Please fill out this field.</div>
                    
                    
                    </div> 
               
                      <div class="col-sm-6">  
                      <label class="text-white">PIN Code*:</label>
                      <input type="number" class="form-control form-control-user" id="pin" name="pin" placeholder="Enter PIN Code" required>
                      <div class="valid-feedback">Valid.</div>
                   <div class=" invalid-feedback">Please fill out this field.</div>
                    </div>
                      
                    </div> 
                   
                  <div class="form-group">
                 <label class="text-white">Upload Product Image*: </label>
                <input type="file" class="form-control form-control-user" id="image" name="image" required>
                <div class="valid-feedback">Valid.</div>
                   <div class=" invalid-feedback">Please fill out this field.</div>
                  
                 </div> 



                   <hr>
                 <!--   <div class="form-group">
                    <div class="alert alert-success alert-dismissible fade show">
                 <strong>Success!</strong> Your message has been sent successfully.
              <button type="submit" class="close" data-dismiss="alert">&times;</button>
                   </div> -->

              <input type="submit" name="btn" value="Update" class="btn bg-gradient-success text-white">  
            
          <!--<a href="<?php echo site_url('farmer_controller/seepro');?>" class="btn btn-primary">Save</a> -->
                   <a href="<?php echo site_url('farmer_controller/updatepro');?>" class="btn btn-danger">Cancel</a>
                   </div>
                  </form>
               
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

     

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>
