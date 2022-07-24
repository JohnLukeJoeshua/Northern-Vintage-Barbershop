<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Appointment Form</title>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link href="Master_CSS.css" rel="stylesheet" type="text/css"/>
    </head>

    <!-- Site navigation menu -->
<body>   
<header class="site-header">
  <div class="site-identity">
  <a href="Homepage.html"><img src="Logo Northern.jpg" alt="Northern Vintage Barbershop"/></a>
  <h1><a href="Homepage.html">Northern Vintage Barbershop</a></h1>
  </div>  
  <nav class="site-navigation">
    <ul class="nav">
  <li><a href="About Us.html">About Us</a>
  <li><a href="Product & Services.html">Product & Services</a>
  <li><a href="Review & Feedback.php">Review & Feedback</a>
  <li><a href="Contact Us.php">Contact Us</a>
  <li><a href="Make Appointment.php">Make Appointment</a>
  <li><a href="admin/login.php">Admin</a>
    </ul>
  </nav>
</header

    
<!-- Page Wrapper-->

<div class="page-wrapper">
<!-- Main content -->

     <div class="inner-layer">
          <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>Book Your Slot Now & Save your time</h1>
                        <p>Get the Fresher Styles & Cuts For Your Needs along with any Beard Trimming Services Or Shaving.</p>
                        <h2>For Help Call: +6013-4160494</h2>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointment</h2>
                        </div>
                        <form action="Booking.php" method="post" class="form-body">
                            <div class="row form-row">
                              <input type="text" placeholder="Enter Full name" name="name" id="name" class="form-control">
                            </div>
                            <div class="row form-row">
                              <input type="text" placeholder="Enter Mobile Number" name="phone" id="phone" class="form-control">
                            </div>
                             <div class="row form-row">
                              <input type="text" placeholder="Enter Email Adreess" name="email" id="email" class="form-control">
                            </div>
                           <div class="row form-row">
                              <input id="dat" type="text" placeholder="Appointment Date" name="date" id="date" class="form-control">
                            </div>
                            <div class="row form-row">
                              <input type="time" placeholder="Enter Appointment Time" name="time" id="time" class="form-control">
                            </div>
                            
                                <h6>Types of Services</h6>

                                <label class="container-check"> Haircut
                                   <input type="checkbox" value="Haircut" id="checkbox" name="service[]" checked="checked">
                                   <span class="checkmark"></span>
                                </label>
                                <label class="container-check">Hair Cut & Beard
                                    <input type="checkbox" value="Hair Cut & Beard" id="checkbox" name="service[]">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-check">Beard Trimming
                                    <input type="checkbox" value="Beard Trimming" id="checkbox" name="service[]">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-check">Clean Shaving
                                  <input type="checkbox" value="Clean Shaving" id="checkbox" name="service[]">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="container-check">Hair Straightening Service
                                  <input type="checkbox" value="Hair Straightening Service" id="checkbox" name="service[]">
                                  <span class="checkmark"></span>
                                </label>


                             <div class="row form-row">
                               <button class="btn btn-success btn-appointment" name="book" value="book">Book Appointment</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
      

</div>

<!-- Bottom-Footer! -->


    
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="https://www.instagram.com/northernvintage.barbershop/" target="_blank"><i class="iconS ion-social-instagram"></i></a><a href="https://www.facebook.com/northernvintagebarbershop" target="_blank"><i class="iconS ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="homepage.html">Home</a></li>
                <li class="list-inline-item"><a href="About Us.html">About Us</a></li>
                <li class="list-inline-item"><a href="Contact Us.php">Contact Us</a></li>
                <li class="list-inline-item"><a href="Make Appointment.php">Make Appointment</a></li>
            </ul>
            <p class="copyright">Northern Vintage Barbershop @ Made 29 April 2022 by John Joeshua</p>
        </footer>
    </div>
</body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <script>
      $(document).ready(function(){
          $("#dat").datepicker();
      })
    </script>
    
</html>
   