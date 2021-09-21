

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
	<title>Farmer Front Page</title>
	<!-- <link rel="stylesheet" href="views/css/style.css"> -->
    <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

	<style type="text/css">
    #nav-bar
{
  position: sticky;
  top: 0;
  z-index: 10;
}
.navbar-nav li
{
  padding: 0 10px;
   
}
/*.navbarNav{
  color: white!important;
}*/
.navbar-nav li a
{
  float:right;
  text-align:left;
  margin: 10px,10px
}
#nav-bar ul li a:hover{
  color: #007bff!important;
}
/*.navbar
{
  background:#7aaec4;
}*/
.navbar-toggler
{
  border: none!important;
}
.nav-link
{
  color:#fff!important;
  font-weight:600;
  font-size:16px;
}
.navbar-brand
{
  color:#fff!important;
}

/*-----ABOUT SECTION---*/
.About
{
  margin:85px 0;

}
/*img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}*/
h2{
  text-align: center;
  
  letter-spacing: 2px;
  color:green;
  padding-bottom: 10px;
}


h2:after
{
  
  background: #333;
  display:block;
  height:3px;
  width:150px;
  margin:10px auto;
}
.profile
{
  margin-top:35px;
  margin-left: 400px;
  margin-right: 150px;
}
.profile .img-box
{
  opacity: 1;
  display: block;
  position: relative;

  
}
.profile h2
{
  font-size:22px;
  font-weight: bold;
  margin-top:15px;
}
.profile h3
{
  font-size: 15px;
  font-weight: bold;
  margin-top: 15px;
}
.img-box:after
{
  content:'';
  opacity: 0;
  background-color: rgba(0,0,0,0.6);
  position: absolute;
  right:0;
  left:0;
  top:0;
  bottom:0;
}
.img-box ul
{
  margin: 0;
  padding: 20px 0;
  position: absolute;
  z-index: 1;
  bottom:0;
  display: block;
  left:50%;
  transform: translateX(-50%);
  opacity: 0;
}
.img-box ul li
{
  width:30px;
  height: 30px;
  border: 1px solid #fff;
  border-radius:50%;
  margin:3px;
  padding:7px;
  
}
.img-box a
{
  color:#fff;
}
.img-box:hover:after
{
  opacity: 0.8;
}
.img-box:hover ul
{
  opacity: 1;
  h
}

*, *:before, *:after {
  box-sizing: inherit;
}





.column {
  float: left;
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/*contact us*/
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: green;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  opacity: 0.8;
}

/* Style the container/contact section */
.fluid-container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }

/*.carousel {
  width:640px;
  height:360px;
}*/
 
}
  </style>
</head>
<body>
  <?php include "navbar.php"; ?>
<!---NavigationBar-->
  <section id="home" class=" section1">
 
  	<div class="fluid-container">
<style>
  .carousel-caption {
  position: absolute;
  bottom: 46%;
  top: 20%;
  left: 18%;
  z-index: 20;
  color: white;
  text-shadow: 0 1px 2px rgba(0,0,0,.6);
}
</style>
  	<!--slider-->
  	
  		<!-- <div id="headerslider" class="carousel slide" data-ride="carousel"> -->
 <!--  <ol class="carousel-indicators">
    <li data-target="#headerslider" data-slide-to="0" class="active"></li>
    <li data-target="#headerslider" data-slide-to="1"></li>
    <li data-target="#headerslider" data-slide-to="2"></li>
  </ol> -->
<div id="fullCarousel" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" role="listbox">

    <div class="carousel-item active">

      <img class="img-fluid" src="<?php echo base_url().'assets/img/farm5.png';?>" width="1500px" height="400px" alt="First slide">

       
        <div class="carousel-caption">
              <h1 class=""><b>If You Ate Today,Thank A Farmer</b></h1>
            </div>



    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="<?php echo base_url().'assets/img/farm6.png';?>" width="1500px" height="400px"  alt="Second slide">

        <div class="carousel-caption">
              <h1 class=""><b>Eat Healthy,Live Longer</b></h1>
            </div>
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="<?php echo base_url().'assets/img/farm7.png';?>" width="1500px" height="400px"  alt="Third slide">

        <div class="carousel-caption">
              <h1 class=""><b>Eat Fresh,Stay Healthy</b></h1>
            </div>
    </div>
    
    <a class="carousel-control-prev" href="#fullCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <!--    <span class="sr-only">Previous</span> -->
   <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#fullCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <!--  <span class="sr-only">Next</span> -->
     <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>
  	</div>
</section>
<hr>
<!-----About---->


 <!--  our products -->
  <section id="products" class="section3">
 <div style="text-align:center">
    <h2 style="color: green"><b>About Us</b></h2>

<p class="text-gray-900 mb-4">The OPEPL Fresh Private Limited was founded by Mr. Goutam Debnath and was established in Jan 2018, <br>headquartered at Badharghat, Milan Chakra, Agartala Tripura. Our mission is to ensure fresh and pesticicdes free foods <br>to our customers. We have our own land area of 32 Acres Farm at Kanchanmala GP under West Tripura district, <br>where we produce freshly and naturally grown products to serve our customers the best of nature.</p>
      </div>
      </section>
      <hr>
<!-- contact -->
<section id="contact" class="section4">
<div class="fluid-container">
<!-- <div class="container"> -->
  <div style="text-align:center">
    <h2 style="color: green"><b>Contact Us</b></h2>
   
  </div>
  <div class="row">
    <div class="column">
  <h3 class="text-gray-900 mb-4">Drop us a message!</h3><br>
<h3 style="color: green"><b>Opepl Fresh Pvt Ltd.</b></h3><br>
<p class="text-gray-900 mb-4"><b>CIN: U01113TR2018PTC013542</b><br>
<b>House No-451568, Milan Chakra, Badharghat,</b><br> 
<b>PO-AD Nagar, West</b><br>
<b>Tripura,Tripura-799003</b>
<b>Tel: 03812371011 / 07085053182</b><br>
<b>Email id: info@opeplfresh.com</b></p>
    </div>
    <div class="column">
      <form  method="post" action="<?php echo site_url('admin_controller/enquirymsg');?>"  class="user">
       
        <input type="text" id="en_name" name="en_name"  placeholder="Name.." required>
        <br>
        <input type="text" id="en_email" name="en_email"  placeholder="Email.." required>
          <br>
       <!--  <select id="country" name="country" >
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <br><br> -->
        <input type="text" id="en_phone" name="en_phone"  placeholder="Phone.." required>
        <br>
        <textarea id="en_message" name="en_message" placeholder="Message.." style="height:170px" required></textarea>
        <input type="submit" name="btn"  value="Send" class="btn btn-success">       
      </form>
    </div>
  </div>
</div>
</section>

<style>
.footer  {
   position: relative;
   
   left: 0;
   bottom: 0;
   width: 100%;
   height: 50px;
   background-color: green;
   color: white;
   text-align: center;

   opacity: 0.8;
 }
   
</style>

 <footer>
        <div class="footer">
          <div class="copyright text-center my-auto">
            <p>Copyright © 2020  ismartconnect.com, All rights reserved</p>
          </div>
        </div>
      </footer>
 <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>/assets/js/sb-admin-2.min.js"></script>
 


 </body>
</html>

