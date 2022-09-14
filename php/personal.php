<?php
  session_start();
  $connection = mysqli_connect('localhost:3306','root','root');
  mysqli_select_db($connection, 'car_rental');
  $username = $_SESSION['username'];
  $cname = $_SESSION['custName'];
  $password = $_SESSION['password'];
  $cphone = $_SESSION['custPhone'];
  $caddress = $_SESSION['custAddress'];
  $customerID = $_SESSION['custID'];
  $clicense = $_SESSION['custLicense'];
  $custCreditCard = $_SESSION['custCredit'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Your Personal Information</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v1.0.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.php"><img src="logo" width="130" height="130"></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="index.php#about">About</a></li>
              <li><a href="index.php#services">Services</a></li>
              <li><a href="inventory.php">Inventory</a></li>
              <li><a href="index.php#contact">Contact</a></li>
              <li class="drop-down"><a href=""><?php echo $cname?></a>
                <ul>
                  <li><a href="reservation.php">Your Reservations</a></li>
                  <li><a href="personal.php">Your Personal Information</a></li>
                  <li><a href="login.php">Logout</a></li>
                </ul>
              </li>
                </ul>
              </li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Your Personal Information</li>
        </ol>
        <h2>Welcome <?php echo $cname?>!</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <!-- Displays all the personal information of the customer -->
              <h2 class="entry-title">
                <a>Your Personal Information</a>
              </h2>

              <div class="entry-content">
                <p>
                  <b>Name:</b> <?php echo $cname?>
                </p>
                <p>
                  <b>Phone Number:</b> <?php echo $cphone?>
                </p>
                <p>
                  <b>Address:</b> <?php echo $caddress?>
                </p>
                <p>
                  <b>Username:</b> <?php echo $username?>
                </p>
                <p>
                  <b>Password:</b> <?php echo $password?>
                </p>
                <p>
                  <b>Driver License Number:</b> <?php echo $clicense?>
                </p>
                <p>
                  <b>Credit Card Number:</b> <?php echo $custCreditCard?>
                </p>
                <a class="about-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Edit Info
                <i class="bx bx-chevron-right"></i></a>

                <!-- Where the user can update their personal information -->
                <div class="collapse" id="collapseExample">
                  <p></p>
                  <form action="update.php" class="user" method="post" enctype="multiport/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="custName" placeholder="Full Name" ><!--User must input first name in this textbox  --> 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="custPhone" placeholder="Phone Number" ><!--User must input last nae in this textbox --> 
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="custAddress" placeholder="Address" ><!--User must input Email Adresss in this textbox --> 
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="username" placeholder="Username" > <!--User must input Username in this textbox --> 
                  </div> 
 
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password" ><!--User must input Password in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="custLicense" placeholder="Driver's License Number" > <!--User must input Username in this textbox --> 
                  </div> 
 
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="custCredit" placeholder="Credit Card" ><!--User must input Password in this textbox --> 
                  </div>
                </div>

                <button type="submit" class="btn-get-started scrollto" style="float: right; "><!--If the user has inputed a value in all the required fields above then the sugmit buton will call to the databse if not then user will be prompt to which field thwey have not submitted--> 
                <a class="about-btn">Update Account</a>
                </button>
              </form>
                </div>
                <br></br>
              </div>

            </article><!-- End blog entry -->

            </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ROS Luxury Car Rental<span>.</span></h3>
            <p>
              350 Victoria St<br>
              Toronto, ON M5B 2K3<br>
              Canada<br><br>
              <strong>Phone:</strong> (416)416-4164<br>
              <strong>Email:</strong> support@roscarrental.ca<br>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>ROS Luxury Car Rental</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
