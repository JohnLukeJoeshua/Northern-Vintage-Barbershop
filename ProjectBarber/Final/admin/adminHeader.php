<?php
     include_once('dbconnect.php');
?>
       
 <!-- nav -->
 
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #111;">
    
    <a class="navbar-brand ml-5" href="index.php">
    <img src="./assets/images/logo.png" width="80" height="80" alt="">
    </a>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <img src="./assets/images/logo.png" width="80" height="80" style="margin: 20px">    
    <a href="./index.php" ><i class="fa fa-home"></i> Dashboard</a>  
    <a href="employee.php"><i class="fa fa-users"></i> Employees</a>
    <a href="contactusdetails.php"><i class="fa fa-phone"></i> Contact Us</a>
    <a href="feedback.php"><i class="fa fa-th-large"></i> Feedback</a>
    <a href="appointment.php"><i class="fa fa-calendar"></i> Appointments</a>
</div>

<div id="main">
<span style="font-size:30px;cursor:pointer;color:Red" onclick="openNav()">&#9776; Admin Panel</span>
</div>

<script src="assets/js/script.js" type="text/javascript"></script>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
        
    <div class="user-cart">  
          <a href="logout.php" style="text-decoration:none;">
          <i class="fa fa-sign-out mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
          </a>
    </div>  
    
    
</nav>
