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
	.lead,.text-black{
		font-weight:bold;
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
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bookings.php">Booking</a>
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
        
		<?php
								include 'config.php';
								$sql1 = "select * from addslider";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$image=$row1['image'];
								$content=$row1['content'];
	?>

        <div class="slider-item" style="background-image: url('../admin/ourmenu/<?php echo $image; ?>');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up"><?php echo $content; ?></h1>
                <!--<p class="mb-5" data-aos="fade-up" data-aos-delay="100">Handcrafted with love by <a href="https://free-template.co" target="_blank">Free-Template.co</a></p>-->
                <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Get Started</a></p>
              </div>
            </div>
          </div>

        </div>

        <?php
						  
								}
								}
								?>
		
		

      </section>
    <!-- END slider -->
    </div> 
    

    <section class="section bg-light py-5  bottom-slant-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="flaticon-dinner d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Enjoy Eating</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
            <span class="wrap-icon"><span class="flaticon-fish d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Fish lovers</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
            <span class="wrap-icon"><span class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Juice corner</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
            <span class="wrap-icon"><span class="flaticon-meat d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Meat Eaters</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
    </section>
    

    <section class="section pb-0">
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade">
            <div class="col-md-7 text-center heading-wrap">
              <h2 data-aos="fade-up">Royal Catering</h2>
              <p data-aos="fade-up" data-aos-delay="100">To pursue service excellence by establishing highly acclaimed catering facilities and service that set the industry benchmark in the region while aiming to exceed culinary and hospitality expectations.</p>
            </div>
          </div>
        <div class="row align-items-center">
          <div class="col-lg-4">
            <img src="img3.jpg" style="height:500px;" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="200">
          </div>
          <div class="col-lg-4">
            <img src="img4.jpg" style="height:300px;" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="300">
            <img src="img5.jpg" style="height:300px;" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="400">
          </div>
          <div class="col-lg-4">
            <img src="img6.jpg" style="height:500px;" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="500">
          </div>
        </div>
      </div>
    </section>

 <!--   <section class="section ">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid mb-5">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Special Menu</h2>
            </div>
          </div>
        </div>
        <div class="owl-carousel centernonloop">
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="100">
            <div class="text">
              <p class="dishes-price">Rs.250</p>
              <h2 class="dishes-heading">Butter Chicken with Naan</h2>
            </div>
            <img src="butter.jpg" alt="" class="img-fluid" style="height:500px;">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="200">
            <div class="text">
              <p class="dishes-price">Rs.150</p>
              <h2 class="dishes-heading">Paneer Butter Masala</h2>
            </div>
            <img src="butterpaneer.jpg" alt="" class="img-fluid" style="height:500px;">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="300">
            <div class="text">
              <p class="dishes-price">Rs.150</p>
              <h2 class="dishes-heading">Honey Garlic Chicken Skewers</h2>
            </div>
            <img src="honeygarlic.jpg" alt="" class="img-fluid" style="height:500px;">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="400">
            <div class="text">
              <p class="dishes-price">Rs.100</p>
              <h2 class="dishes-heading">Chole Bhature</h2>
            </div>
            <img src="chole.jpg" alt="" class="img-fluid" style="height:500px;">
          </a>
		  <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="400">
            <div class="text">
              <p class="dishes-price">Rs.250</p>
              <h2 class="dishes-heading">Chicken Dum Biryani</h2>
            </div>
            <img src="dumbiryani.jpg" alt="" class="img-fluid" style="height:500px;">
          </a>
		  <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="400">
            <div class="text">
              <p class="dishes-price">Rs.250</p>
              <h2 class="dishes-heading">Paneer Tikka Biryani</h2>
            </div>
            <img src="paneertikka.webp" alt="" class="img-fluid" style="height:500px;">
          </a>
		  <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="400">
            <div class="text">
              <p class="dishes-price">Rs.150</p>
              <h2 class="dishes-heading">Chicken Cutlet Pav</h2>
            </div>
            <img src="chickencutlet.jpg" alt="" class="img-fluid" style="height:500px;">
          </a>
        </div>
      </div>

    </section>  --> <!-- .section -->
	
	<section class="section ">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid mb-5">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Special Menu</h2>
            </div>
          </div>
        </div>
		<div class="owl-carousel centernonloop">
		<?php
			include 'config.php';
			$sql1 = "select * from specialmenu";
			$result1 = mysqli_query($con,$sql1);
			$num1=mysqlI_num_rows($result1);
			$sl=0;
			if($num1 > 0)
			{ 
			while($row1 = mysqli_fetch_array($result1))
			{ 
			$sl+=1;
			$id=$row1[0];
			
			$image=$row1['image'];
			$itemname=$row1['itemname'];
			$price=$row1['price'];
							
	?>
		
        
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="100">
            <div class="text">
              <p class="dishes-price">Rs.<?php echo $price; ?></p>
              <h2 class="dishes-heading"><?php echo $itemname; ?></h2>
            </div>
            <img src="../admin/ourmenu/<?php echo $image; ?>" alt="" class="img-fluid" style="height:500px;">
          </a>
		  <?php
			}
			}
			?>
		
		</div>
		
      </div>

    </section> <!-- .section -->

  <section class="section bg-light  top-slant-white bottom-slant-gray">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Our Menu</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        
        <div class="row no-gutters">
		
		<?php
			include 'config.php';
			$sql1 = "select * from addmenuitem";
			$result1 = mysqli_query($con,$sql1);
			$num1=mysqlI_num_rows($result1);
			$sl=0;
			if($num1 > 0)
			{ 
			while($row1 = mysqli_fetch_array($result1))
			{ 
			$sl+=1;
			$id=$row1[0];
			
			$itemname=$row1['itemname'];	
			$image=$row1['image'];
			$description=$row1['description'];
			$price=$row1['price'];
							
	?>
		  <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('../admin/ourmenu/<?php echo $image; ?>');" data-aos="fade"></div>
              <div class="text order-1">
                <h3><?php echo $itemname; ?></h3>
                <p><?php echo $description; ?> </p>
                <p class="text-primary h3">Rs.<?php echo $price; ?></p>
              </div>
            </div>
          </div>
        
<?php
			}
			}
			?>
         
		
        </div>

       
        

      </div>
    </section>
	
<!-- .section -->

   

    <section class="section relative-higher">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Testimonial</h2>
              <!-- <span class="back-text">Testimonial</span> -->
            </div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="owl-carousel centernonloop2">
			
			<?php
								include 'config.php';
								$sql1 = "select * from reviews";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$customerimage=$row1['customerimage'];
								$customername=$row1['customername'];
								$phonenumber=$row1['phonenumber'];
								$feedback=$row1['feedback'];
								?>
								
			
              <div class="slide" data-aos="fade-left" data-aos-delay="100">
                <blockquote class="testimonial">
                  <p>&ldquo; <?php echo $feedback; ?> &rdquo;</p>
                  <div class="d-flex author">
                    <img src="../admin/reviewimage/<?php echo $customerimage; ?>" alt="" class="mr-4">
                    <div class="author-info">
                      <h4><?php echo $customername; ?></h4>
                      <p><?php echo $phonenumber; ?></p>
                    </div>
                  </div>  
                </blockquote>
              </div>
              <?php
			}
			}
			?>
            </div>
          </div>
        </div>

        

        
      </div>
    </section> <!-- .section -->

    <section class="section  bg-light top-slant-white">
      
    
	 <section class="section bg-light top-slant-white">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Delicious Combos</h2>
            </div>
          </div>
        </div>
      </div>
        <div class="container">
          <div class="row">
            <div class="major-caousel js-carousel-1 owl-carousel">
			
			<?php
								include 'config.php';
								$sql1 = "select * from deliciouscombo";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$comboimage=$row1['comboimage'];
								$comboname=$row1['comboname'];
								$comboitems1=$row1['comboitems1'];
								$comboitems2=$row1['comboitems2'];
								$comboitems3=$row1['comboitems3'];
								$comboitems4=$row1['comboitems4'];
								$comboitems5=$row1['comboitems5'];
								$comboitems6=$row1['comboitems6'];
								$comboitems7=$row1['comboitems7'];
								$comboitems8=$row1['comboitems8'];
								$comboitems9=$row1['comboitems9'];
								$comboitems10=$row1['comboitems10'];
	?>
			
              <div>
                <div class="media d-block media-custom text-center">
                  <a href=""><img src="../admin/comboimages/<?php echo $comboimage; ?>" alt="slider image" alt="Image Placeholder" class="img-fluid" style="height:270px;"></a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black"><?php echo $comboname; ?></h3>
                    <p class="lead"><?php echo $comboitems1; ?></p>
					<p class="lead"><?php echo $comboitems2; ?></p>
					<p class="lead"><?php echo $comboitems3; ?></p>
					<p class="lead"><?php echo $comboitems4; ?></p>
					<p class="lead"><?php echo $comboitems5; ?></p>
					<p class="lead"><?php echo $comboitems6; ?></p>
					<p class="lead"><?php echo $comboitems7; ?></p>
					<p class="lead"><?php echo $comboitems8; ?></p>
					<p class="lead"><?php echo $comboitems9; ?></p>
					<p class="lead"><?php echo $comboitems10; ?></p>
                  </div>
                </div>
              </div>
              
              
            
              
            <?php
			}
			}
			?>
              
          </div>
          <!-- END slider -->
          </div>
        </div>
      
    </section>
	  <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Latest Events</h2>
              <span class="back-text">Our Events</span>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
		
		<?php
								include 'config.php';
								$sql1 = "select * from events";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$eventimage=$row1['eventimage'];
								$eventname=$row1['eventname'];
								$eventday=$row1['eventday'];
								$date=date("d-m-Y",strtotime($eventday));
								$eventdes=$row1['eventdes'];
							
	?>
		
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="blog d-block">
              <a class="bg-image d-block" href="" style="background-image: url('../admin/eventimages/<?php echo $eventimage; ?>');"></a>
              <div class="text">
                <h3><a href=""><?php echo $eventname; ?></a></h3>
                <p class="sched-time">
                  <span><span class="fa fa-calendar"></span> <?php echo $date; ?></span> <br>
                </p>
                <p><?php echo $eventdes; ?></p>
                
                
                
              </div>
              
            </div>
          </div>
          
		  
		  
		  
	    <?php
						  
								}
								}
								?>
		  
        </div>
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