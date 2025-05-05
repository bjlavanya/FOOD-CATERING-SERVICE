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
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Royal caterers</title>
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
	.viewbookingdiv{
		background-image:url("bookingback.jpg");
		width:1200;
		height:1000px;
		background-repeat:no-repeat;
		margin-left:150px;
		border-radius:10px;
		filter:brightness(70%);
		
	}
	
	.personaldetailsdiv{
		width:500px;
		height:500px;
		border:2px solid white;
		margin-left:50px;
		position:relative;
		top:60px;
		border-radius:20px;
	}
	
	.heading{
		margin-left:60px;
		margin-top:20px;
		font-size:32px;
		font-weight:bold;
		color:white;
		font-family:serif;
		text-decoration-line:underline;
	}
	
	.details{
		margin-left:60px;
		margin-top:30px;
		color:white;
		font-size:23px;
		font-family: Georgia, serif;
	}
	
	.orderdetails{
		width:550px;
		height:600px;
		border:2px solid white;
		position:absolute;
		top:300px;
		left:600px;
		border-radius:20px;
		font-size:22px;
		
		color:white;
		font-family: Georgia, serif;
	}
	
	.orders{
		font-size:22px;
		font-weight:bold;
		color:white;
		font-family:serif;
	}
	.orderpara{
		margin-left:60px;
		margin-top:30px;
		color:white;
		font-size:23px;
		font-family: Georgia, serif;
	}
	
	h5{
		margin-left:60px;
		margin-top:30px;
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
                <a class="nav-link active" href="viewbooking.php">View Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reviews.php">Reviews</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="">Logout</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
    <div class="slider-wrap">
      <section class="home-slider owl-carousel">


        <div class="slider-item" style="background-image: url('foodback.jpg');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">Royal Catering view Booking</h1>
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
              <h2>Booking Summary</h2>
              
            </div>
          </div>
        </div>
      </div>
	  


      <div class="viewbookingdiv">
	  
	  <?php
								include 'config.php';
								$sql1 = "select * from booking";
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
								
								$message=$row1['message'];
								?>
	  
	  <div class="personaldetailsdiv">
	  <h3 class="heading"> Personal Details</h3>
	    <p class="details">Name: <?php echo $customername; ?><br>
		   Contact Number: <?php echo $contactnumber; ?><br>
		   Event Name:<?php echo $eventname; ?><br>
		   Event Date: <?php echo $eventdate; ?><br>
		   Timings: <?php echo $timings; ?><br>
		   Event Address: <?php echo $eventaddress; ?><br>
		   Message: <?php echo $message; ?></p>
	  </div>
	  
	  <div class="orderdetails">
	    <h3 class="heading"> Order Details</h3>
		<p class="orderpara">Number of Attendees: <?php echo $attendees; ?>     <br>      Order type: Both Veg and Non-veg</p>
		<h5 class="orders"><u>Orders</u></h5>
		<p class="orderpara">Veg cambo- dosa,pulav,butter paneer with naan,non veg cambo-chicken,mutton biryani,paneer tikka ,drink and beverages-mojito,fruit juice,ice creams,chat cambo
		<br>
		Total Amount: Rs. 30000<br>
		Advance Amount: Rs.30000<br>
		Order Status: Paid
		</p>
	  </div>
	  
	  <?php
						  
								}
								}
								?>
	  
	  </div>
	  <br><br>
	  <br>
	  
	  
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