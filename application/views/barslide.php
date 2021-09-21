<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>

<!--nav bar  -->

<nav class="navbar navbar-expand-md bg-gradient-success">


  
   <a class="navbar-brand" href="<?php echo site_url('farmer_controller/front');?>">
    <img src="<?php echo base_url().'assets/img/logo1.png" class="img-circle width-70';?>"></a>


  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">

    <!-- left side nav bar  -->
    <ul class="navbar-nav  mr-auto ">

     <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo site_url('farmer_controller/front');?>">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo site_url('farmer_controller/about');?>">About Us</a>
      </li>

     <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo site_url('farmer_controller/Contact');?>">Contact Us</a>
     </li> 
    
    </ul>
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item">
      <!--   <a class="nav-link text-white" href="#">Login</a> -->
       <div class="dropdown">
  <a class="text-white" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <ul>
    <li class="dropdown-item " >
      <a class="text-dark" href="<?php echo site_url('farmer_controller/adminlogin');?>">Admin</a></li>
    <li class="dropdown-item " >

      <a class="text-dark" href="<?php echo site_url('farmer_controller/login');?>">Farmers</a></li>
  
  </ul>
  </div>
</div>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo site_url('farmer_controller/front');?>">Logout
      </li></a>
    
    </ul>
  
  </div>
</nav>
<!-- end nav  -->

<div id="fullCarousel" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="img-fluid" src="<?php echo base_url().'assets/img/farm2.png';?>" width="100%" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="<?php echo base_url().'assets/img/farm3.png';?>" width="100%" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="<?php echo base_url().'assets/img/farm4.png';?>" width="100%" alt="Third slide">
    </div>
    <a class="carousel-control-prev" href="#fullCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#fullCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>