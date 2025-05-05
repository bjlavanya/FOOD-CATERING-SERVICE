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
	.bookingdiv{
	width:700px;
	height:1730px;
	border:2px solid #ff7404;
	position:relative;
	top:60px;
	left:400px;
	border-radius:20px;	
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

input:focus {
	border:none;
  outline: none;
  box-shadow: 0 0 0 2px #ff7404;
  border:1px solid #ff7404;
}

select:focus {
	border:none;
  outline: none;
  box-shadow: 0 0 0 2px #ff7404;
  border:1px solid #ff7404;
}

textarea:focus {
	border:none;
  outline: none;
  box-shadow: 0 0 0 2px #ff7404;
  border:1px solid #ff7404;
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

.submitbtn:focus{
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
                <a class="nav-link active" href="bookings.php">Booking</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="viewbook.php">View Booking</a>
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
                <h1 data-aos="fade-up">Booking Royal catering</h1>
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
              <h2>Booking Order</h2>
              
            </div>
          </div>
        </div>
      </div>

      <div class="bookingdiv">
  
  <form method="post" action="#">
    <label>Name</label><br><input type="text" placeholder="Enter your name" class="inputtext" name="customername" required><br>
	<label>Booking date</label><br><input type="date" placeholder="dd-mm-yyyy" class="inputtext" name="bookingdate" 
	value="<?php echo date('Y-m-d'); ?>"  required readonly><br>
	<label>Email</label><br><input type="email" placeholder="Enter your email" class="inputtext" name="email" value="<?php echo $royaladmin; ?>" readonly><br>
	<label>Contact number</label><br><input type="tel" pattern="[0-9]{10}" placeholder="Enter your number" class="inputtext" name="contactnumber" required><br>
	<label>Event Name</label><br><input type="text" placeholder="Enter your event name" class="inputtext" name="eventname" required><br>
	<label>Event date</label><br><input type="date" placeholder="dd-mm-yyyy" class="inputtext" name="eventdate" required><br>
	<label>Timings</label><br>
	<select name="timings" required>
	  <option value="Morning">Morning</option>
	  <option value="Afternoon">Afternoon</option>
	  <option value="Evening">Evening</option>
	  <option value="Night">Night</option>
	</select><br>
	<label>Event Address</label><br><textarea rows="3" cols="48" placeholder="Enter event address" name="eventaddress" required></textarea><br>
	<label><u>Place an Order</u></label><br>
	<label class="order">Order: Number of attendees</label><br><input type="text" placeholder="Number of Attendees" class="inputtext" name="attendees" required><br>
	<label style="margin-left:75px;">Select order type</label><br><input type="checkbox" value="Chinese" name="orderchinese">Chinese<br><input type="checkbox" value="Veg" name="orderveg">Veg<br><input type="checkbox" value="Non-Veg" name="ordernonveg">Non-Veg<br>
	<input type="checkbox" value="Both veg and non-veg" name="orderboth">Both veg and non-veg<br>
	<label>Food Items</label><textarea name="fooditems" rows="5" cols="48" placeholder="Enter  food items which you want to order" name="eventaddress" required></textarea><br>
	<label style="margin-left:65px;">Any Message/Request</label><br><textarea rows="3" cols="48" name="message" placeholder="Any message / request" required></textarea><br>
	<button type="submit" class="submitbtn" name="submit">Submit</button>
  </form>
  
  <?php
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
	    
		$customername=$_POST['customername'];
		$bookingdate=$_POST['bookingdate'];
		
		$email=$_POST['email'];
		$contactnumber=$_POST['contactnumber'];
		$eventname=$_POST['eventname'];
		$eventdate=$_POST['eventdate'];
		$timings=$_POST['timings'];
		$eventaddress=$_POST['eventaddress'];
		$attendees=$_POST['attendees'];
		$orderchinese=$_POST['orderchinese'];
		$orderveg=$_POST['orderveg'];
		$ordernonveg=$_POST['ordernonveg'];
		$orderboth=$_POST['orderboth'];
		$fooditems=$_POST['fooditems'];
		$message=$_POST['message'];

		$query = "INSERT INTO booking(customername,bookingdate,email,contactnumber,eventname,eventdate,timings,eventaddress,attendees,orderchinese,orderveg,ordernonveg,orderboth,fooditems,message)VALUES('".$customername."','".$bookingdate."','".$email."','".$contactnumber."','".$eventname."','".$eventdate."','".$timings."','".$eventaddress."','".$attendees."','".$orderchinese."','".$orderveg."','".$ordernonveg."','".$orderboth."','".$fooditems."','".$message."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Order placed  Successfully');
			</script>";
			echo "<script> location.href='viewbook.php'; </script>";

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