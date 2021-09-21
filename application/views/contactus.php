


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Farmer - WelCome</title>
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

  <style>

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

    .fluid-container {
  border-radius: 5px;
 /* background-color: #f2f2f2;*/
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

  </style>

</head>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>



<body data-spy="scroll" data-target="#navbarResponsive" class="bg-gradient-success">
<?php include "navbar.php"; ?>
<div class="text-center">
  <br>
<!-- <h2 class="text-white"> <b>CONTACT US</b></h2>
<p class="h6 text-gray-900 mb-4">OPEPL Fresh Pvt Ltd<br>
CIN: U01113TR2018PTC013542<br>
House No-451568, Milan Chakra, Badharghat,<br> 
PO-AD Nagar, West<br>
Tripura,Tripura-799003
Tel: 03812371011 / 07085053182<br>
Email id: info@opeplfresh.com</p> -->
<div class="fluid-container">
<!-- <div class="container"> -->
  <div style="text-align:center">
    <h2 style="color: white"><b>Contact Us</b></h2>
   
  </div>
  <div class="row">
    <div class="column">
  <h3 class="text-gray-900 mb-4">Drop us a message!</h3><br>
<h3 style="color: white"><b>Opepl Fresh Pvt Ltd.</b></h3><br>
<p class="text-gray-900 mb-4"><b>CIN: U01113TR2018PTC013542</b><br>
<b>House No-451568, Milan Chakra, Badharghat,</b><br> 
<b>PO-AD Nagar, West</b><br>
<b>Tripura,Tripura-799003</b>
<b>Tel: 03812371011 / 07085053182</b><br>
<b>Email id: info@opeplfresh.com</b></p>
    </div>
    <div class="column">
      <form  method="post" action="<?php echo site_url('admin_controller/enquirymsg');?>"  class="user">
       
        <input type="text" id="en_name" name="en_name" placeholder="Name.." required>
        <br>
        <input type="text" id="en_email" name="en_email" placeholder="Email.." required>
          <br>
       <!--  <select id="country" name="country" >
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <br><br> -->
        <input type="text" id="en_phone" name="en_phone" placeholder="Phone.." required>
        <br>
        <textarea id="en_message" name="en_message" placeholder="Message.." style="height:170px" required></textarea>
        <div class="text-left">
        <input type="submit" name="btn" value="Send" class="bg-gradient-success">  
         </div>    
      </form>
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
  <script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>/assets/js/sb-admin-2.min.js"></script>

 
</body>

</html>