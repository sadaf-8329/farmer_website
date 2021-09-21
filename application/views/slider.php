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

<!-- 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>   -->

<nav class="navbar navbar-expand-md ">  
<div class="container-fluid">  
 
  <a class="navbar-brand" href="<?php echo site_url('farmer_controller/front');?>">
    <img src="<?php echo base_url().'assets/img/logo1.png" class="img-circle width-80';?>">
  </a>  


    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#mynav">  
    <span class="navbar-toggler-icon text-white"></span></button>  
      
        <div class="collapse navbar-collapse" id="mynav">  
        <ul class="nav navbar-nav ">  
           <li class="nav-item active" >  
              
            <a  class="nav-link text-white" href="#">Home</a>  
            </li>  
            <li class="nav-item " >  
              
            <a  class="nav-link text-white" href="#">About Us</a>  
            </li>  
          
            <li class="nav-item" >  
              
            <a  class="nav-link text-white" href="#">Contact us</a>  
            </li>  
            </ul>  

 <ul class="nav navbar-nav navbar-right">  
             
                <!-- <li class="nav-item " >   -->
           <!--  <a  class="nav-link text-white" href="#">Login</a>  
            </li>   -->
             
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
        Login
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo site_url('farmer_controller/adminlogin');?>">Admin</a>
        <a class="dropdown-item" href="<?php echo site_url('farmer_controller/login');?>">Farmer</a>
      
      </div>
    
    </li>

            <li class="nav-item " >  
              
            <a  class="nav-link text-white" href="#">Logout</a>  
            </li>  
            
            </ul> 





         </div>
     </div>
 </nav> 

      <!--    <div id="slides" class="carousel slide" data-ride="carousel">  
    <ol class="carousel-indicators">   
        <li data-target="#slides" data-slide-to="0" class="active"></li>  
        <li data-target="#slides" data-slide-to="1" ></li>  
          
    </ol>  
    <div class="carousel-inner">  
        <div class="carousel-item active">  
        <img src="<?php echo base_url().'assets/img/farm2.png';?>" width="100%" height="100%">  
            <div class="carousel-caption">  
            <h1 class="display-2">World of Peace</h1>  
            <h3 >Live Happy</h3>  
            <button type="button" class="btn btn-outline-light btn-lg">Login</button>  
            <button type="button" class="btn btn-primary btn-lg">Signin</button>  
            </div>  
        </div>  
        <div class="carousel-item" style="width: 100%">  
        <img src="<?php echo base_url().'assets/img/farm4.png';?>" width="100%" height="100%">  
        </div>  
        </div> </div>   -->
        </html>