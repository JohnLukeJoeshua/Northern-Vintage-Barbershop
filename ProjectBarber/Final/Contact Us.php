<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us</title>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<section class="contact">
    <div class="content-contact">
        <h2>Contact Us</h2>
        <p>Get the Fresher Styles & Cuts For Your Needs along with any Beard Trimming Services Or Shaving</p>
    </div>

    <div class="container-contact">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Address</h3>
                    <p><a href="https://goo.gl/maps/7rqvYmKqYNRcmvaE7" style="color: white; background-color: transparent" target="_blank"><u>No.3, Jalan Bukit Panchor 1, Taman Panchor Indah,14300 Nibong Tebal, Pulau Pinang</u></a></p>
                    
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>+6013-4160494</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>northernvintagebarbershop@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="contactForm">
            <form action="Send.php" method="post">
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input type="text" name="name" required="">
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="">
                    <span>Email</span>
                </div>    
                <div class="inputBox">
                    <textarea name="msg" maxlength="220" required=""></textarea>
                    <span>Type your Message.....</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="Submit" value="Send">
                    <?php session_start();
                        if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);}
                    ?>
                </div>
            </form>
        </div>
    </div>
   
</section>

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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>






</html>
   