<?php
session_start();
if(isset($_SESSION['royaladmin']))
{
	$royaladmin=$_SESSION['royaladmin'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Royal Admin Booking Details</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <img src="logoroyal4.png" alt="logo" width="220px;" height="130px">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="adminlogo.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Royal Catering</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="home.php" class="nav-item nav-link "><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a>
					<a href="addslider.php" class="nav-item nav-link "><i class="fa fa-sliders" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Add Slider</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-bars"></i>&nbsp;&nbsp;&nbsp;Menu Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
						    <a href="specialmenu.php" class="dropdown-item">Special Menu</a>
							<a href="deliciouscombo.php" class="dropdown-item">Delicious Combos</a>
                            <a href="order.php" class="dropdown-item">Order Type</a>
                            <a href="addcourse.php" class="dropdown-item">Add Course</a>
                            <a href="addmenuitem.php" class="dropdown-item">Add Menu Items</a>
                        </div>
                    </div>
					
					<a href="events.php" class="nav-item nav-link"><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;Event Details</a>
					<a href="contactdetails.php" class="nav-item nav-link"><i class="fa fa-address-book"></i>&nbsp;&nbsp;&nbsp;Contact Details</a>
					<a href="manageusers.php" class="nav-item nav-link"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;&nbsp;Manage Users</a>
					<a href="viewbooking.php" class="nav-item nav-link active"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;Booking Details</a>
                    <!--<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>&nbsp;&nbsp;Online Booking</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="bookinglist.php" class="dropdown-item">Manage Bookings</a>
                            <a href="onlinepayment.php" class="dropdown-item">Online Booking Payments</a>
                            
                        </div>
                    </div>-->

                    <a href="viewreviews.php" class="nav-item nav-link "><i class="fa fa-comment"></i>&nbsp;&nbsp;&nbsp;View Reviews</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;Logout</a>
                    
                </div>
            </nav>
        </div>

<!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="adminlogo.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Royal Catering</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">    
                            <a href="#" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">ACTIONS</h6>
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl. No</th>
										<th scope="col">Customer Name</th>
										<th scope="col">Booking Date</th>
										<th scope="col">Customer Email</th>
                                        <th scope="col">Contact Number</th>
                                        <th scope="col">Event Name</th>
                                        <th scope="col">Event Date</th>
										<th scope="col">Timings</th>
										<th scope="col">Event Address</th>
										<th scope="col">Attendees</th>
										<th scope="col">Chinese</th>
										<th scope="col">Veg</th>
										<th scope="col">Non Veg</th>
										<th scope="col">Both</th>
										<th scope="col">Order  Items</th>
										<th scope="col">Message</th>
										<th scope="col">Status</th>
                                        <th scope="col">Action</th>										
										<th></th>
                                    </tr>
                                </thead>
                                <tbody>
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
								
								
                                    <tr>
                                        <th scope="row"><?php echo $sl; ?></th>
										<td><?php echo $customername; ?></td>
										<td><?php echo $bookingdate; ?></td>
										<td><?php echo $email; ?></td>
                                        <td><?php echo $contactnumber; ?></td>
										<td><?php echo $eventname; ?></td>
										<td><?php echo $date; ?></td>
										<td><?php echo $timings; ?></td>
										<td><?php echo $eventaddress; ?></td>
										<td><?php echo $attendees; ?></td>
										<td><?php echo $orderchinese; ?></td>
										<td><?php echo $orderveg; ?></td>
										<td><?php echo $ordernonveg; ?></td>
										<td><?php echo $orderboth; ?></td>
										<td><?php echo $fooditems; ?></td>
										<td><?php echo $message; ?></td>
										<td><?php echo $status; ?></td>
										
										
										<td>
										<?php if($status=='Pending'){ ?>
										<form action="#" method="post">
                                         <input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
										 
										<a href="viewbooking.php?accept=<?php echo $id; ?>" type="submit" name="accept" class="btn btn-success m-3">ACCEPT</a>
										 
										</form>
										
										<form action="#" method="post">
                                         <input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
                                        <a href="viewbooking.php?reject=<?php echo $id; ?>"   type="submit" name="reject" class="btn btn-primary m-3">REJECT</a>
										</form>
										
										<?php } else if($status=='Accepted'||$status=='Rejected'){ ?>
										 <b style="color:red;">Its Done</b>
										 <?php } ?>
										</td>
                                    </tr>
                                    <?php
						  
								}
								}
								?>
                                </tbody>
                            </table>
							
							<?php
if(isset($_GET['accept']))
{
				$up=$_GET['accept'];
			
	error_reporting(1);
	include("config.php");

		
		$status='Accepted';
		
		
		$query = "UPDATE  booking SET status='".$status."' where id='".$up."'";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Status Accepted Successfully');
			</script>";
			echo "<script> location.href='viewbooking.php'; </script>";

}
?>

<?php
if(isset($_GET['reject']))
{
				$up=$_GET['reject'];
			
	error_reporting(1);
	include("config.php");

		
		$status='Rejected';
		
		
		$query = "UPDATE  booking SET status='".$status."' where id='".$up."'";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Status Rejected Successfully');
			</script>";
			echo "<script> location.href='viewbooking.php'; </script>";

}
?>


							
  						
							<?php
if(isset($_POST['delete']))
{
	foreach ($_POST['id'] as $key => $value) 
	{	
		$selectano=$value;	
	}
	$query1 = "delete from booking  where id='".$selectano."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script> location.href='viewbooking.php'; </script>";
}
?>
  
                        </div>
                    </div>
                    
                   
                   
                    
                </div>
            </div>
            <!-- Form End -->


             <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Royal Catering</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">B J Lavanya</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">Hash Infotech</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>


<?php
}
else
{
	echo"<script>location.href='../index.php';</script>";
}
?>
