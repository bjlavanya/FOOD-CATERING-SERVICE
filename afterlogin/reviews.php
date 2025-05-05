<!-- 
////////////////////////////////////////////////////////////////

Author: Free-Template.co
Author URL: http://free-template.co.
License: https://creativecommons.org/licenses/by/3.0/
License URL: https://creativecommons.org/licenses/by/3.0/
Site License URL: https://free-template.co/template-license/
  
Website:  https://free-template.co
Facebook: https://www.facebook.com/FreeDashTemplate.co
Twitter:  https://twitter.com/Free_Templateco
RSS Feed: https://feeds.feedburner.com/Free-templateco

////////////////////////////////////////////////////////////////
-->

<?php
session_start();
if(isset($_SESSION['royaladmin']))
{
	$royaladmin=$_SESSION['royaladmin'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Royal caterers Afterlogin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <link rel="shortcut icon" href="ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
	
	<style>
	.reviewformdiv{
		position:relative;
		width:700px;
	    height:700px;
		border:2px solid #ff7404;
	top:10px;
	left:400px;
	border-radius:20px;	
	
	}
	
	label{
	margin-top:20px;
	font-weight:bold;
	margin-left:110px;
	font-size:24px;
}

form{
	margin-left:140px;
}

.inputtext{
	width:400px;
	padding:10px;
	transtition:all 0.5s;
}

input:focus {
	border:#ff7404;
  outline: none;
  box-shadow: 0 0 0 2px #ff7404;
}

textarea:focus{
	border:#ff7404;
  outline: none;
  box-shadow: 0 0 0 2px #ff7404;
}

.feed{
		  position:relative;
		 top:20px;
		 padding:10px;
		 color:white;
		 background-color:#ff7404;
		 border:none;
		 width:410px;
		 
	 }
	 
.inputfile{
	border:1px solid black;
	padding:10px;
	width:400px;
}

.feed:focus{
	border:none;
  outline: none;
  box-shadow: 0 0 0 2px #ff7404;
  background-color:#fff;
  color:#ff7404;
}	 
	 
	
	</style>
  </head>
  <body>
    
 <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <img src="royallogo2.png" style="height:200px;width:270px;margin-left:10px;border-radius:15px;">
          <!--<a class="navbar-brand" href="index.html">ROYAL<BR> CATERING</a>-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link " href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bookings.php">Booking</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="viewbook.php">View Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="reviews.php">Reviews</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" onclick="window.location.href='logout.php'">Logout</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
    <div class="slider-wrap">
      <section class="home-slider owl-carousel">


        <div class="slider-item" style="background-image: url('sweetback.jpg');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">Royal Catering Review</h1>
                <!--<p class="mb-5" data-aos="fade-up" data-aos-delay="100">Handcrafted with love by <a href="https://free-template.co" target="_blank">Free-Template.co</a></p>-->
                <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Get Started</a></p>
              </div>
            </div>
          </div>

        </div>

        

      </section>
    <!-- END slider -->
    </div>
    <section class="section relative-higher">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Customer Review</h2>
              <!-- <span class="back-text">Testimonial</span> -->
            </div>
          </div>
        </div>
      </div>

      <div class="reviewformdiv">
	  <form method="post" action="#">
	    <label>Customer Image</label><br><input type="file" name="customerimage"  class="inputfile" required><br>
	    <label>Customer Name</label><br><input type="text" name="customername" placeholder="Enter your name" class="inputtext" required><br>
		<label>Contact Number</label><br><input type="tel" name="phonenumber" pattern="[0-9]{10}" placeholder="Enter your contact number" class="inputtext" required><br>
		<label style="margin-left:130px;">Feedback</label><br><textarea name="feedback" rows="4" cols="50" placeholder="Your valuable feedback means a lot to us..." required></textarea><br>
		
		<button type="submit" name="submitbtn" class="feed">Submit</button>
	  </form>
	  
	  <?php
if(isset($_POST['submitbtn']))
{
	error_reporting(1);
	include("config.php");
	    
		$customerimage=$_POST['customerimage'];
		$customername=$_POST['customername'];
		$phonenumber=$_POST['phonenumber'];
		$feedback=$_POST['feedback'];

		$query = "INSERT INTO reviews(customerimage,customername,phonenumber,feedback)VALUES('".$customerimage."','".$customername."','".$phonenumber."','".$feedback."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Your review submitted Successfully');
			</script>";
			echo "<script> location.href='reviews.php'; </script>";

}
?>
	  </div>

       
    </section> 

    <footer class="site-footer" role="contentinfo">
      <div class="container mb-5">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="row">
             
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">We, at royal catering services, seek to provide the best of service that can be made available,thanks to the hard work of our employees and the faith of our clients.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            
            <div>
              <h3>Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-black">Address:</span>
                  <span>Amar Alva Road, Mangaladevi, Mangaluru</span></li>
                <li class="d-block"><span class="d-block text-black">Phone:</span><span>+91 89600 34533</span></li>
                <li class="d-block"><span class="d-block text-black">Email:</span><span>royalcatering233@gmail.com</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="index.php">Home</a></li>
              <li><a href="bookings.php">Booking</a></li>
              <li><a href="viewbooking.php">View Booking</a></li>
              <li><a href="reviews.php">Reviews</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p>
              <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
          <small class="block">&copy; 2023 <strong class="text-black">Royal</strong> Catering services. All Rights Reserved. <br> Owner: Shivaprasad Salian</small> 
          </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    

    <script src="js/main.js"></script>
    
  </body>
</html>

<?php
}
else
{
	echo"<script>location.href='../loginandsign.php';</script>";
}
?>