<!DOCTYPE html>

<html>
    <head>
        <title>Review & Feedback</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
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
    <div class="main-block">
      <h1>Your Feedback on Our Services</h1>
      <form action="Submit.php" method="post" class="form-Feedback">
        <div class="info-Feedback">
          <div class="info-item-Feedback">
            <label class="icon-Feedback" for="name"><i class="fas fa-user"></i></label>
            <input type="text" name="name" id="name" placeholder="Name" required/>
          </div>
          <div  class="info-item-Feedback">
            <label class="icon-Feedback" for="age"><i class="fas fa-calendar"></i></i></label>
            <input type="text" name="age" id="age" placeholder="Age" required/>
          </div>
          <div  class="info-item-Feedback">
            <label class="icon-Feedback" for="email"><i class="fas fa-envelope"></i></label>
            <input type="text" name="email" id="email" placeholder="Email" required/>
          </div>
          <div  class="info-item-Feedback">
            <label class="icon-Feedback" for="phone"><i class="fas fa-phone"></i></label>
            <input type="tel" name="phone" id="phone" placeholder="Phone" required/>
          </div>
        </div>
        <div class="grade-type-Feedback">
          <h3>Rate Our Services</h3>
          <div> 
            <input type="radio" value="Excellent" id="radioOne" name="grade" checked/>
            <label for="radioOne" class="radio-Feedback">Excellent</label>
          </div>
          <div>
            <input type="radio" value="Very Good" id="radioTwo" name="grade" />
            <label for="radioTwo" class="radio-Feedback">Very Good</label>
          </div>
          <div>
            <input type="radio" value="Good" id="radioThree" name="grade" />
            <label for="radioThree" class="radio-Feedback">Good</label>
          </div>
          <div>
            <input type="radio" value="Bad" id="radioFour" name="grade" />
            <label for="radioFour" class="radio-Feedback">Bad</label>
          </div>
          <div>
            <input type="radio" value="Very Bad" id="radioFive" name="grade" />
            <label for="radioFive" class="radio-Feedback">Very Bad</label>
          </div>
        </div>
        <h3>Please provide any additional comments</h3>
        <textarea name="msg" maxlength="220" required="" rows="4"></textarea>
        <button type="submit" name="Submit" value="Submit">Submit</button>
         <?php session_start();
                        if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);}
         ?>
      </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>






</html>
   