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
    <title>Royal catering view booking page</title>
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
  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <img src="royallogo2.png" style="height:200px;width:270px;margin-left:10px;border-radius:15px;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bookings.php">Booking</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" href="viewbook.php">View Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reviews.php">Reviews</a>
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
                <h1 data-aos="fade-up">VIEW BOOKING</h1>
                
                <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Get Started</a></p>
              </div>
            </div>
          </div>

        </div>

        

      </section>
    <!-- END slider -->
    </div> 
    

   

   

    <section class="section">
<div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade">
            <div class="col-md-7 text-center heading-wrap">
              <h2 data-aos="fade-up">Royal Catering</h2>
              <p data-aos="fade-up" data-aos-delay="100">To pursue service excellence by establishing highly acclaimed catering facilities and service that set the industry benchmark in the region while aiming to exceed culinary and hospitality expectations.</p>
            </div>
          </div>
        <div class="row align-items-center">
          <div class="col-lg-6">
            <img src="dahialootikki.jpg" style="height:350px;" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="200">
          </div>
          
          <div class="col-lg-6">
            <img src="chocolate.jpg" style="height:350px;" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="500">
          </div>
        </div>
      </div>

    </section> <!-- .section -->

    

   

    <section class="section  bg-light top-slant-white">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>VIEW BOOKING</h2>
              <!--<span class="back-text">view booking</span>-->
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
            <div class="blog d-block">
			
			
              
        <div class="text">
		
		<?php
								include 'config.php';
								$bdate=date('Y-m-d');
								$sql1 = "select * from booking where email='".$royaladmin."' and bookingdate='".$bdate."' ";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								
								$customername=$row1['customername'];
								$bookingdate=$row1['bookingdate'];
								$email=$row1['email'];
								$contactnumber=$row1['contactnumber'];
								$eventname=$row1['eventname'];
								$eventdate=$row1['eventdate'];
								$date=date("d-m-Y",strtotime($eventdate));
								$timings=$row1['timings'];
								$eventaddress=$row1['eventaddress'];
								$attendees=$row1['attendees'];
								$orderchinese=$row1['orderchinese'];
								$orderveg=$row1['orderveg'];
								$ordernonveg=$row1['ordernonveg'];
								$orderboth=$row1['orderboth'];
								$fooditems=$row1['fooditems'];
								$message=$row1['message'];
								$status=$row1['status'];
								
								?>
		
                <h3><a href="#"><b>Your Booking Details:</b></a></h3>
                <p><b>Name:</b> <?php echo $customername; ?><br>
				<b>Booking Date:</b> <?php echo $bookingdate; ?><br>
				<b>Email:</b> <?php echo $email; ?><br>
		   <b>Contact Number: </b><?php echo $contactnumber; ?><br>
		   <b>Event Name:</b><?php echo $eventname; ?><br>
		   <b>Event Date:</b> <?php echo $date; ?><br>
		   <b>Timings:</b> <?php echo $timings; ?><br>
		  <b> Event Address:</b> <?php echo $eventaddress; ?><br>
		   <b>Message: </b><?php echo $message; ?></p>
		     
			<p><b>Number of Attendees:</b> <?php echo $attendees; ?>     <br>     
			   <b> Order type:</b><br><?php echo $orderchinese; ?> &nbsp; <?php echo $orderveg; ?> &nbsp;<?php echo $ordernonveg; ?> &nbsp;<?php echo $orderboth; ?> </p>
		
		<p><b>Order items:</b> <?php echo $fooditems; ?>  
		<br>
		<b>Total Amount:</b> Rs. <br>
		<b>Advance Amount:</b> Rs.<br>
		<b>Order Status:</b> <?php echo $status; ?>
		</p>

								<?php
								}
								}		
?>								
                
        </div>
			 
              
            </div>
          </div>
         
		  
		  
        </div>
      </div>
	  
	  <div class="text-center">
  <a type="submit" href="viewbook1.php" class="btn btn-primary">View All Bookings</a>
</div>

    </section> <!-- .section -->

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