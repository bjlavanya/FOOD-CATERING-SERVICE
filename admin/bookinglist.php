<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Royal Admin Menu Items</title>
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
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-bars"></i>&nbsp;&nbsp;&nbsp;Menu Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="order.php" class="dropdown-item">Order Type</a>
                            <a href="addcourse.php" class="dropdown-item">Add Course</a>
                            <a href="addmenuitem.php" class="dropdown-item">Add Menu Items</a>
                        </div>
                    </div>
					<a href="manageusers.php" class="nav-item nav-link"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;&nbsp;Manage Users</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>&nbsp;&nbsp;Online Booking</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="bookinglist.php" class="dropdown-item">Manage Bookings</a>
                            <a href="onlinepayment.php" class="dropdown-item">Online Booking Payments</a>
                            
                        </div>
                    </div>

                    <a href="viewreviews.php" class="nav-item nav-link"><i class="fa fa-comment"></i>&nbsp;&nbsp;&nbsp;View Reviews</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;Logout</a>
                    
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
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">BOOKING LIST</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl. No</th>
                                        <th scope="col">Name</th>
										<th scope="col">Address</th>
										<th scope="col">Event Date</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Order type</th>
                                        <th scope="col">Status</th>										
										<th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Priya</td>
										<td>Vamanjoor church hall,Vamanjoor</td>
										<td>29-12-2023</td>
										<td>9906795660</td>
										<td>Afternoon</td>
										<td>Paid</td>
										<td><a href="viewmore.php"><button type="submit" class="btn btn-primary">View more>></button></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Ankitha</td>
										<td>Cordel hall,Kulshekar</td>
										<td>24-12-2023</td>
										<td>9905966004</td>
										<td>Afternoon</td>
										<td>Paid</td>
										<td><a href="viewmore1.php"><button type="submit" class="btn btn-primary">View more>></button></a></td>
                                    </tr>
									<tr>
                                        <th scope="row">3</th>
                                        <td>Prajwal</td>
										<td>Adyar garden,Adyar</td>
										<td>21-12-2023</td>
										<td>8990554630</td>
										<td>Night</td>
										<td>Paid</td>
										<td><a href="viewmore2.php"><button type="submit" class="btn btn-primary">View more>></button></a></td>
                                    </tr>
                                </tbody>
                            </table>
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