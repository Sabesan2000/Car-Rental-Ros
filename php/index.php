<?php

//Starts session and connects to the database where all the tables are in
  session_start();
  $connection = mysqli_connect('localhost:3306','root','root');
  mysqli_select_db($connection, 'car_rental');

  //Session variables for requiring info for tables
  $username = $_SESSION['username'];
  $cname = $_SESSION['custName'];
  $password = $_SESSION['password'];
  $cphone = $_SESSION['custPhone'];
  $caddress = $_SESSION['custAddress'];


  //Queries to acquire the amount of customers we have in the database and output it in the homepage
  $resourceOne = mysqli_query($connection, "SELECT customerID FROM customers WHERE customerID IS NOT NULL");
  $customerCount = mysqli_num_rows($resourceOne);

  //Queries to acquire the amount of bookings we have in the database and output it in the homepage
  $resourceTwo = mysqli_query($connection, "SELECT bookingID FROM booking WHERE bookingID IS NOT NULL");
  $bookingCount = mysqli_num_rows($resourceTwo);

  //Queries to acquire the amount of vehicles we have in the database and output it in the homepage
  $resourceThree = mysqli_query($connection, "SELECT vehicleID FROM vehicles WHERE vehicleID IS NOT NULL");
  $vehicleCount = mysqli_num_rows($resourceThree);

  //Query to display the vehicles in the GTA, excluding Mississauga
  $gtaVehicles = mysqli_query($connection, "SELECT vehicleMake, vehicleModel FROM vehicles WHERE vehicleLocation NOT IN ('Mississauga')");
  $gtaVehiclesCount = mysqli_num_rows($gtaVehicles);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ROS Luxury Car Rentals</title>
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
              <li class="active"><a href="#header">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="inventory.php">Inventory</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="drop-down"><a href="">
                <?php echo $cname ?> <!-- Displays the user's full name on the top right corner -->
                  </a>
                <ul>
                  <li><a href="reservation.php">Your Reservations</a></li>
                  <li><a href="personal.php">Your Personal Information</a></li>
                  <li><a href="login.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-xl-5">
              <h1>Experience luxurious and exotic car rentals</h1>
              <h2>Avaiable across the GTA and surrounding regions</h2>
              <a href="inventory.php" class="btn-get-started scrollto">Current Inventory</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container-fluid" data-aos="zoom-in">
        <div class="row justify-content-center">
          <div class="text-center">
          	<!-- Displays the amount of vehicles in the GTA -->
            <h1 style="font-family: sans-serif;">We currently have <?php echo $gtaVehiclesCount?> cars in the GTA!</h1> 
          </div>
        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>The best luxury car rental in all of GTA!</h3>
              <p>
                Join us and rent a beautiful, luxurious, exotic car with affordable pricing! Visit our inventory and see our current available vehicles.
              </p>
              <a href="#contact" class="about-btn"><span>Contact us</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>No Hidden Fees</h4>
                  <p>As a trustworthy business, we mention all fees that are included with the rental price to make sure that the customers are satisfied.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Lost and Found</h4>
                  <p>If you leave any valuable items in the car rental, visit our location to retrieve your item. However, we are not responsible if it is missing/stolen.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Automotive Luxury</h4>
                  <p>View our beautiful inventory of cars that are currently available. We also ensure that all cars are kept clean and tidy for the next customer.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Safe and Secure</h4>
                  <p>We ensure that all personal information are secured and well-protected from potential hackers.</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

        	<!-- Displays the amount of customers in our rental service -->
          <div class="col-sm-4">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up"><?php echo $customerCount?></span>
              <p>Customers</p>
            </div>
          </div>

          <!-- Displays the amount of bookings in our rental service -->
          <div class="col-sm-4">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up"><?php echo $bookingCount?></span>
              <p>Bookings</p>
            </div>
          </div>

          <!-- Displays the amount of vehicles in our rental service -->
          <div class="col-sm-4">
            <div class="count-box">
              <i class="icofont-car"></i>
              <span data-toggle="counter-up"><?php echo $vehicleCount?></span>
              <p>Vehicles</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div style="margin-left: auto; margin-right: auto">
            <br></br>
            <br></br>
            <!-- List all the budget cars from our inventory -->
            <h2 style="font-family: sans-serif">Here is our list of our budget-friendly cars in our inventory!</h2>
            <h4 style="margin-left: auto; margin-right: auto;">
              <?php
                $queryBudget = "SELECT * FROM vehicles WHERE vehiclePrice < (SELECT AVG(vehiclePrice) FROM vehicles);";
                $budgetResult = mysqli_query($connection, $queryBudget);
                echo "<br></br><table border='1' style='margin-left: auto; margin-right: auto; font-family: sans-serif'><tr><th>Vehicle Make</th><th> Vehicle Model </th><th>Vehicle Type</th><th>Price</th></tr>";


                while($row = mysqli_fetch_assoc($budgetResult)){
                  echo "<tr>";
                  echo "<td>" . $row['vehicleMake'] . "</td>";
                  echo "<td>" . $row['vehicleModel'] . "</td>";
                  echo "<td>" . $row['vehicleType'] . "</td>";
                  echo "<td>" . $row['vehiclePrice'] . "</td>";
                  echo "</tr>";
                }
                echo "</table>"; ?></h4>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>At ROS Luxury Car Rentals, we offer the best customer service for our beloved customers. We make sure that everyone is satisfied with their purchase and do the best of our abilities to allow all customers to have a valuable, memorable experience. </p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="icofont-computer"></i>
              <h4><a href="#">Online Services</a></h4>
              <p>With the current pandemic, it is ideal to use our online services to ensure the safety and precautions for both our clients and employees. Visit our inventory to see our cars that are available near you, and you can also pay online with a valid credit card.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="icofont-chart-bar-graph"></i>
              <h4><a href="#">Customer Satisfaction</a></h4>
              <p>From our increasing sales figures, it is known that we are putting our maximum efforts to satisfy each customer that rents our cars. From our competitive pricing to our friendly customer service, we strive everday to make sure that all customers are satisfied with our business.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <i class="icofont-earth"></i>
              <h4><a href="#">Our Widespread Inventory</a></h4>
              <p>We make sure that we obtain vehicles from all types of markets, including Italian, British, American, and Japanese. With this in mind, we have a wide variety of cars to chose to suit the needs of the customers' desire.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <i class="icofont-tasks-alt"></i>
              <h4><a href="#">Flexible Booking</a></h4>
              <p>At ROS Luxury Car Rentals, we are available 7 days a week, even during statutory holidays. We make sure that you will have the car you need at your convenience. However, we advise to book ahead of time to achieve your preferred time.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

        <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container-fluid" data-aos="zoom-in">
        <div class="row justify-content-center">
          <div class="text-center">
            <h3 style="font-family: sans-serif;">Look how many customers have rented out our Tesla Model X with their credit card!</h3>
            <h5>
            <!-- Used queries to show which customers that have booked our Tesla Model X and our satisfied-->
              <?php
                $queryModelX = "SELECT DISTINCT cname, paymentMethod, vehicleMake, vehicleModel FROM customers, booking, payment WHERE booking.vehicleMake='Tesla' AND booking.vehicleModel='Model X' AND paymentMethod='Credit Card' AND customers.customerID = booking.customer_id";
                $modelXResult = mysqli_query($connection, $queryModelX);
                echo "<br></br><table border='1' style='margin-left: auto; margin-right: auto; font-family: sans-serif'><tr><th>Customer</th><th>Vehicle Make</th><th>Vehicle Model</th></tr>";

                while($row = mysqli_fetch_assoc($modelXResult)){
                  echo "<tr>";
                  echo "<td>" . $row['cname'] . "</td>";
                  echo "<td>" . $row['vehicleMake'] . "</td>";
                  echo "<td>" . $row['vehicleModel'] . "</td>";
                  echo "</tr>";
                }
                echo "</table>";

              ?>
            </h5>
          </div>
        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Depending on the vehicle and the amount of days rented, the price can vary. However, our competitive pricing will allow for a better/optimal rental experience for our beloved customers. Please look over the pricing of our rental prices below and the inventory for specific vehicle prices. </p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3>Mid-Tier Luxury/Sport Cars</h3>
              <h4><sup>$</sup>200-450<span> / day</span></h4>
              <ul>
                <li>Tesla Model S</li>
                <li>Cadillac Escalade ESV</li>
                <li>Lexus LC500</li>
              </ul>
              <div class="btn-wrap">
                <a href="inventory.php" class="btn-buy">Rent Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>High-Tier Luxury/Super Cars</h3>
              <h4><sup>$</sup>500-800<span> / day</span></h4>
              <ul>
                <li>Tesla Model X</li>
                <li>Porsche Taycan Turbo S</li>
                <li>Nissan GTR</li>
                <li>Rolls-Royce Wraith</li>
              </ul>
              <div class="btn-wrap">
                <a href="inventory.php" class="btn-buy">Rent Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <h3>Exotic Supercars</h3>
              <h4><sup>$</sup>1000-2000<span> / day</span></h4>
              <ul>
                <li>Lamborghini Huracan</li>
                <li>Ferrari LaFerrari</li>
                <li>Mclaren 720S</li>
              </ul>
              <div class="btn-wrap">
                <a href="inventory.php" class="btn-buy">Rent Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list" data-aos="fade-up">

          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">What are your renter requirements for renting luxury/exotic cars? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-parent=".faq-list">
              <p>
                In order to rent from us, all drivers must meet the following requirements:
                <br></br>
                <ul>
                  <li>Valid 'G' driver license</li>
                  <li>Relatively clean driving record</li>
                  <li>Be able to provide an acceptable form of payment</li>
                  <li>Must be over the age of 25</li>
                </ul>
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">What forms of payment are needed to rent a car? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                <br></br>
                <ul>
                  <li>Cash</li>
                  <li>Certified Cheque</li>
                  <li>Credit Card</li>
                </ul>
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">How do I change or cancel my reservation? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                To update/cancel your reservation, click on your name on the top right and select 'Your Reservations'. From there, you can then update or cancel your reservation.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">What happens if I left behind a valuable item in the car?  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                We do our best to make sure that all valuables are kept at a safe location until you visit one of our locations to pick it up. However, we are not responsible if any valuables are missing/stolen before returning the vehicle.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Do you offer any discounts or promotions? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                In addition to offering some of the most competitive rates in the industry; ROS Luxury Car Rentals offers special promotions/discounts throughout the year.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Will there be a late fee if I were to return a vehicle after its scheduled return date? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Sadly, there is a charge/fee if a vehicle is returned past the returning date. However, if there is a valid reason, we will waive that fee as we understand that there are certain scenarios that can take place. 
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact information is provided for further inquiries and details regarding the car rental process. We will get back to you as soon as possible. Also, reach us at our dedicated locations for in-person consulting and available vehicles for rent.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">
          	<!-- Contact information -->
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>350 Victoria St, Toronto, ON M5B 2K3</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>support@roscarrental.ca<br>service@roscarrental.ca</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>(416)416-4164<br>(647)647-6474</p>
                </div>
              </div>
            </div>

          </div>

          <!-- Feedback form for extra questions -->
          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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

          <div class="col-lg-2 col-md-12 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#footer">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#footer">Privacy policy</a></li>
            </ul>
          </div>

          <!--<div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>-->

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>ROS Luxury Car Rental</span></strong>. All Rights Reserved
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
