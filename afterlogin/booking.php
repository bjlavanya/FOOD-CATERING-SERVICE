<!DOCTYPE html>
<html>
<head>
<title>Royal Caterers</title>
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
body{
	background-color:white;
}
.booking{
	width:700px;
	height:1400px;
	border:2px solid #ff7404;
	position:relative;
	top:60px;
	left:400px;
	border-radius:20px;	
}

.bookingheading{
	text-align:center;
	margin-top:30px;
	color:#ff7404;
	font-weight:bold;
	font-family:serif;
	font-size:40px;
	text-decoration-line:underline;
}

label{
	margin-top:10px;
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

:focus {
	border:none;
  outline: none;
  box-shadow: 0 0 0 2px #ff7404;
}


select{
	width:400px;
	padding:10px;
}

.order{
	margin-left:30px;
}

input[type=checkbox] {
          accent-color: #ff7404;
        }

.submitbtn{
	position:relative;
	top:20px;
	width:410px;
	padding:10px;
	background-color:#ff7404;
	color:white;
	border:none;
}

</style>
</head>
<body>
<header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <img src="royallogo2.png" style="height:250px;width:270px;margin-left:10px;border-radius:15px;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="booking.php">Booking</a>
              </li>
             <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="services.php">Food Catering</a>
                  <a class="dropdown-item" href="services.php">Drink &amp; Beverages</a>
                  <a class="dropdown-item" href="services.php">Wedding &amp; Birthday</a>
                </div>
              </li>-->
              <li class="nav-item">
                <a class="nav-link" href="viewbooking.php">View Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reviews.php">Reviews</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="loginandsign.php">Logout</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
	
	<div class="slider-wrap no-slanted">
      <div class="slider-item" style="background-image: url('foodback.jpg');height:600px;border-bottom-right-radius:200px;border-bottom-left-radius:200px;">
        
        <h2 style="color:white;font-weight:bold;position:absolute;top:350px;left:250px;font-size:70px;">BOOKING DETAILS OF ROYAL <br>&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CATERING</h2>

      </div>
    <!-- END slider -->
    </div> 
	
<div class="booking">
  <h2 class="bookingheading">Booking Details</h2>
  <form method="post">
    <label>Name</label><br><input type="text" placeholder="Enter your name" class="inputtext"><br>
	<label>Contact number</label><br><input type="tel" pattern="[0-9]{10}" placeholder="Enter your number" class="inputtext"><br>
	<label>Event Name</label><br><input type="text" placeholder="Enter your event name" class="inputtext"><br>
	<label>Event date</label><br><input type="date" placeholder="dd-mm-yyyy" class="inputtext"><br>
	<label>Timings</label><br>
	<select>
	  <option>Morning</option>
	  <option>Afternoon</option>
	  <option>Evening</option>
	  <option>Night</option>
	</select><br>
	<label>Event Address</label><br><textarea rows="3" cols="48" placeholder="Enter event address"></textarea><br>
	<label><u>Place an Order</u></label><br>
	<label class="order">Order: Number of attendees</label><br><input type="text" placeholder="Number of Attendees" class="inputtext"><br>
	<label style="margin-left:75px;">Select order type</label><br><input type="checkbox" value="Chinese">Chinese<br><input type="checkbox" value="Veg">Veg<br><input type="checkbox" value="Non-Veg">Non-Veg<br>
	<input type="checkbox" value="Both veg and non-veg">Both veg and non-veg<br>
	<label style="margin-left:65px;">Any Message/Request</label><br><textarea rows="3" cols="48" placeholder="Any message / request"></textarea><br>
	<input type="submit" value="SUBMIT" class="submitbtn">
  </form>
</div>

<br><br><br><br><br><br><br>
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