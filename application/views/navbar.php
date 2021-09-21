


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Farmer - WelCome</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script> -->

<body>

<nav class="navbar navbar-expand-md bg-gradient-success">
  <!--   <div class="navbar-collapse collapse w-100 order-3  dual-collapse2"> -->




          <!--  <li class="nav-item active"> -->
                <a class="navbar-brand" href="<?php echo site_url('home/page'); ?>">
    <img src="<?php echo base_url() . 'assets/img/logo1.png" class="img-circle width-80'; ?>"></a>
          <!--   </li> -->



   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <div class="container" onclick="myFunction(this)">
    <i class="fa fa-bars"></i>
  </div>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">

<ul class="navbar-nav mr-auto">
            <li class="nav-item">

                <a class="nav-link text-white"  href="<?php echo site_url('home/page'); ?>"><i class="fas fa-home prefix text-white"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo site_url('about/page'); ?>"><i class="fas fa-users prefix text-white"></i> AboutUs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo site_url('contact/page'); ?>"><i class="fas fa-phone prefix text-white"></i> ContactUs</a>
            </li>


        </ul>



    <!-- <div class="navbar-collapse collapse w-100 order-3 dual-collapse2"> -->
        <ul class="navbar-nav ml-auto">

<!--  <li class="nav-item">
        <form class="form-inline">
      <input id="myInput" class="form-control" type="text" placeholder="Search" aria-label="Search">


    </form>
</li> -->

 <li class="nav-item">
               <a class="nav-link text-white" href="<?php echo site_url('farmer/login/page'); ?>"><i class="fas fa-user prefix text-white"></i> Farmer</a>
</li>

 <li class="nav-item">
               <a class="nav-link text-white" href="<?php echo site_url('admin/login/page'); ?>"><i class="fas fa-user prefix text-white"></i> Admin</a>
</li>



    </div>
  </div>
</div>
</li>


        <form class="form-inline">
      <input id="myInput" class="form-control" type="text" placeholder="Search For..." aria-label="Search">


    </form>




        </ul>
        </div>
   <!--  </div> -->
</nav>

<script>
function myFunction(x) {
  x.classList.toggle("change");
}
</script>

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

