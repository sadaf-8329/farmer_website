<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>

<!--nav bar  -->

<nav class="navbar navbar-expand-md">

  
   <a class="navbar-brand" href="<?php echo site_url('farmer_controller/front');?>">
    <img src="<?php echo base_url().'assets/img/logo1.png" class="img-circle width-70';?>">
 <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#mynav">  
    <span class="navbar-toggler-icon"></span></button> 
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <!-- all the links inside mobile menu  -->

    <!-- left side nav bar  -->
    <ul class="navbar-nav mr-auto ">
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
  <a class="text-white dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <ul>
    <li class="dropdown-item text-white" >
      <a href="">Admin</a></li>
    <li class="dropdown-item text-white" >
      <a href="">Farmers</a></li>
  
  </ul>
  </div>
</div>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="#">Logout</a>
      </li>
    
    </ul>
  
  </div>
</nav>