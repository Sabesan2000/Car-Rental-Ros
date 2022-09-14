<?php
  session_start();
  $connection = mysqli_connect('localhost:3306','root','root');
  mysqli_select_db($connection, 'car_rental');
  $username = $_SESSION['username'];
  $cname = $_SESSION['custName'];
  $password = $_SESSION['password'];
  $cphone = $_SESSION['custPhone'];
  $caddress = $_SESSION['custAddress'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ROS Inventory</title>
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
          <li>Inventory</li>
        </ol>
        <h2>Inventory</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry" id="lambo">

            <div class="owl-carousel portfolio-details-carousel">
              <img src="assets/img/cars/lambo/lambo1" class="img-fluid" alt="">
              <img src="assets/img/cars/lambo/lambo2" class="img-fluid" alt="">
              <img src="assets/img/cars/lambo/lambo3" class="img-fluid" alt="">
              <img src="assets/img/cars/lambo/lambo4" class="img-fluid" alt="">
            </div>

              <h2 class="entry-title">
                <a>Lamborghini Aventador</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a>2-Seater</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-calendar"></i> <a><time datetime="2020-01-01">2012</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-dollar"></i><a>1200/day</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Experience the world-renowned Italian supercar, the Lamborghini Aventador. This exotic car is the most highly requested vehicle in our fleet, with the roaring V12 and its vibrant yellow paint.
                </p>
                <div class="read-more">
                <a class="about-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Book Now</i></a>
                </div>
                <div class="collapse" id="collapseExample">
                  <p></p>
                  <form action="lambobooking.php" class="user" method="post" enctype="multiport/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="startDate" placeholder="Start Date - mm/dd/yyyy" ><!--User must input first name in this textbox  --> 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="endDate" placeholder="End Date - mm/dd/yyyy" ><!--User must input last nae in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="deposit" placeholder="Minimum Deposit (≥ $600)" > <!--User must input Username in this textbox --> 
                  </div> 
 
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="custCreditCard" placeholder="Credit Card Number" ><!--User must input Password in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    Delivery Option:&#8205; &#8205; 
                    <input type="radio" id="yes" name="deliveryOption" value="Yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="deliveryOption" value="No">
                    <label for="no">No</label>
                  </div> 
                </div>
                <div class="read-more">
                <input type="submit" value="Place Booking"><!--If the user has inputed a value in all the required fields above then the sugmit buton will call to the databse if not then user will be prompt to which field thwey have not submitted--> 
                  
                </input>
                </div>
              </form>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry" id="laf">

              <div class="owl-carousel portfolio-details-carousel">
              <img src="assets/img/cars/laferrari/laf1" class="img-fluid" alt="">
              <img src="assets/img/cars/laferrari/laf2" class="img-fluid" alt="">
              <img src="assets/img/cars/laferrari/laf3" class="img-fluid" alt="">
              <img src="assets/img/cars/laferrari/laf4" class="img-fluid" alt="">
            </div>

              <h2 class="entry-title">
                <a>Ferrari LaFerrari</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a>2-Seater</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-calendar"></i> <a><time datetime="2020-01-01">2014</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-dollar"></i> <a>2000/day</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Claimed to be one of the best automobiles ever to be produced, the LaFerrari is one of the holy trinities of hypercars. This piece of automotive excellence catches attention from all age groups, with its loud V12 and its menacing all-black paint.
                </p>
                <div class="read-more">
                <a class="about-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Book Now</i></a>
                </div>
                <div class="collapse" id="collapseExample">
                  <p></p>
                  <form action="lafbooking.php" class="user" method="post" enctype="multiport/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="startDate" placeholder="Start Date - mm/dd/yyyy" ><!--User must input first name in this textbox  --> 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="endDate" placeholder="End Date - mm/dd/yyyy" ><!--User must input last nae in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="deposit" placeholder="Minimum Deposit (≥ $1000)" > <!--User must input Username in this textbox --> 
                  </div> 
 
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="custCreditCard" placeholder="Credit Card Number" ><!--User must input Password in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    Delivery Option:&#8205; &#8205; 
                    <input type="radio" id="yes" name="deliveryOption" value="Yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="deliveryOption" value="No">
                    <label for="no">No</label>
                  </div> 
                </div>
                <div class="read-more">
                <input type="submit" value="Place Booking"><!--If the user has inputed a value in all the required fields above then the sugmit buton will call to the databse if not then user will be prompt to which field thwey have not submitted--> 
                  
                </input>
                </div>
              </form>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry" id="modx">

              <div class="owl-carousel portfolio-details-carousel">
              <img src="assets/img/cars/modelx/x1" class="img-fluid" alt="">
              <img src="assets/img/cars/modelx/x2" class="img-fluid" alt="">
              <img src="assets/img/cars/modelx/x3" class="img-fluid" alt="">
              <img src="assets/img/cars/modelx/x4" class="img-fluid" alt="">
            </div>

              <h2 class="entry-title">
                <a>Tesla Model X</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a>7-Seater</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-calendar"></i> <a><time datetime="2020-01-01">2018</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-dollar"></i> <a>500/day</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  The Tesla Model X is the perfect mix of luxury, convenience, and innovation. Known for its fast acceleration and the falcon doors, this vehicle is one of the most popular in our fleet. 
                </p>
                <div class="read-more">
                <a class="about-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Book Now</i></a>
                </div>
                <div class="collapse" id="collapseExample">
                  <p></p>
                  <form action="modxbooking.php" class="user" method="post" enctype="multiport/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="startDate" placeholder="Start Date - mm/dd/yyyy" ><!--User must input first name in this textbox  --> 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="endDate" placeholder="End Date - mm/dd/yyyy" ><!--User must input last nae in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="deposit" placeholder="Minimum Deposit (≥ $250)" > <!--User must input Username in this textbox --> 
                  </div> 
 
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="custCreditCard" placeholder="Credit Card Number" ><!--User must input Password in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    Delivery Option:&#8205; &#8205; 
                    <input type="radio" id="yes" name="deliveryOption" value="Yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="deliveryOption" value="No">
                    <label for="no">No</label>
                  </div> 
                </div>
                <div class="read-more">
                <input type="submit" value="Place Booking"><!--If the user has inputed a value in all the required fields above then the sugmit buton will call to the databse if not then user will be prompt to which field thwey have not submitted--> 
                  
                </input>
                </div>
              </form>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry" id="taycan">

              <div class="owl-carousel portfolio-details-carousel">
              <img src="assets/img/cars/taycan/t1" class="img-fluid" alt="">
              <img src="assets/img/cars/taycan/t2" class="img-fluid" alt="">
              <img src="assets/img/cars/taycan/t3" class="img-fluid" alt="">
              <img src="assets/img/cars/taycan/t4" class="img-fluid" alt="">
            </div>

              <h2 class="entry-title">
                <a>Porsche Taycan Turbo S</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a>4-Seater</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-calendar"></i> <a><time datetime="2020-01-01">2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-dollar"></i> <a>700/day</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  The Porsche Taycan Turbo S combines the luxurious ride and the sporty feel of its traditional Porsche roots. This is one of the fastest cars in our fleet, including our exotic cars. The exhilarating acceleration alone will leave you out of breath, literally. 
                </p>
                <div class="read-more">
                <a class="about-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Book Now</i></a>
                </div>
                <div class="collapse" id="collapseExample">
                  <p></p>
                  <form action="taycanbooking.php" class="user" method="post" enctype="multiport/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="startDate" placeholder="Start Date - mm/dd/yyyy" ><!--User must input first name in this textbox  --> 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="endDate" placeholder="End Date - mm/dd/yyyy" ><!--User must input last nae in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="deposit" placeholder="Minimum Deposit (≥ $350)" > <!--User must input Username in this textbox --> 
                  </div> 
 
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="custCreditCard" placeholder="Credit Card Number" ><!--User must input Password in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    Delivery Option:&#8205; &#8205; 
                    <input type="radio" id="yes" name="deliveryOption" value="Yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="deliveryOption" value="No">
                    <label for="no">No</label>
                  </div> 
                </div>
                <div class="read-more">
                <input type="submit" value="Place Booking"><!--If the user has inputed a value in all the required fields above then the sugmit buton will call to the databse if not then user will be prompt to which field thwey have not submitted--> 
                  
                </input>
                </div>
              </form>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry" id="esv">

              <div class="owl-carousel portfolio-details-carousel">
              <img src="assets/img/cars/escalade/e1" class="img-fluid" alt="">
              <img src="assets/img/cars/escalade/e2" class="img-fluid" alt="">
              <img src="assets/img/cars/escalade/e3" class="img-fluid" alt="">
              <img src="assets/img/cars/escalade/e4" class="img-fluid" alt="">
            </div>

              <h2 class="entry-title">
                <a>Cadillac Escalade ESV</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a>7-Seater</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-calendar"></i> <a><time datetime="2020-01-01">2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-dollar"></i> <a>350/day</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  The go-to party vehicle for various types of occasions. The Escalade is known for fitting 7 adults comfortably and its smooth and silky ride. Powered by an American V8, it has adequate amounts of power to get to your desired destination.   
                </p>
                <div class="read-more">
                <a class="about-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Book Now</i></a>
                </div>
                <div class="collapse" id="collapseExample">
                  <p></p>
                  <form action="escaladebooking.php" class="user" method="post" enctype="multiport/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="startDate" placeholder="Start Date - mm/dd/yyyy" ><!--User must input first name in this textbox  --> 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="endDate" placeholder="End Date - mm/dd/yyyy" ><!--User must input last nae in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="deposit" placeholder="Minimum Deposit (≥ $175)" > <!--User must input Username in this textbox --> 
                  </div> 
 
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="custCreditCard" placeholder="Credit Card Number" ><!--User must input Password in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    Delivery Option:&#8205; &#8205; 
                    <input type="radio" id="yes" name="deliveryOption" value="Yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="deliveryOption" value="No">
                    <label for="no">No</label>
                  </div> 
                </div>
                <div class="read-more">
                <input type="submit" value="Place Booking"><!--If the user has inputed a value in all the required fields above then the sugmit buton will call to the databse if not then user will be prompt to which field thwey have not submitted--> 
                  
                </input>
                </div>
              </form>
                </div>
              </div>

            </article><!-- End blog entry -->


          
            <article class="entry" id="GTR">

              <div class="owl-carousel portfolio-details-carousel">
              <img src="assets/img/cars/gtr/gtr1" class="img-fluid" alt="">
              <img src="assets/img/cars/gtr/gtr2" class="img-fluid" alt="">
              <img src="assets/img/cars/gtr/gtr3" class="img-fluid" alt="">
              <img src="assets/img/cars/gtr/gtr4" class="img-fluid" alt="">
            </div>

              <h2 class="entry-title">
                <a>Nissan GTR</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a>2+2 Seater</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-calendar"></i> <a><time datetime="2020-01-01">2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-dollar"></i> <a>600/day</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  The true Japanese supercar that everyone looks up to. The Nissan GTR is known for its legendary twin-turbo V6, which produces 600 horsepower and 481 lb-ft of torque. This car can still keep up with modern exotic cars despite its small engine.
                </p>
                <div class="read-more">
                <a class="about-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Book Now</i></a>
                </div>
                <div class="collapse" id="collapseExample">
                  <p></p>
                  <form action="gtrbooking.php" class="user" method="post" enctype="multiport/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="startDate" placeholder="Start Date - mm/dd/yyyy" ><!--User must input first name in this textbox  --> 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="endDate" placeholder="End Date - mm/dd/yyyy" ><!--User must input last nae in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="deposit" placeholder="Minimum Deposit (≥ $300)" > <!--User must input Username in this textbox --> 
                  </div> 
 
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="custCreditCard" placeholder="Credit Card Number" ><!--User must input Password in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    Delivery Option:&#8205; &#8205; 
                    <input type="radio" id="yes" name="deliveryOption" value="Yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="deliveryOption" value="No">
                    <label for="no">No</label>
                  </div> 
                </div>
                <div class="read-more">
                <input type="submit" value="Place Booking"><!--If the user has inputed a value in all the required fields above then the sugmit buton will call to the databse if not then user will be prompt to which field thwey have not submitted--> 
                  
                </input>
                </div>
              </form>
                </div>
              </div>
            </article><!-- End blog entry -->
            

            <article class="entry" id="wraith">

              <div class="owl-carousel portfolio-details-carousel">
              <img src="assets/img/cars/wraith/w1" class="img-fluid" alt="">
              <img src="assets/img/cars/wraith/w2" class="img-fluid" alt="">
              <img src="assets/img/cars/wraith/w3" class="img-fluid" alt="">
              <img src="assets/img/cars/wraith/w4" class="img-fluid" alt="">
              <img src="assets/img/cars/wraith/w5" class="img-fluid" alt="">
            </div>

              <h2 class="entry-title">
                <a>Rolls-Royce Wraith</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a>4 Seater</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-calendar"></i> <a><time datetime="2020-01-01">2018</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-dollar"></i> <a>800/day</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  The pinnacle of automotive luxury stands with the Rolls-Royce Wraith. The elegance and dignity driving a Wraith shows true presence of luxurious driving. With a silky smooth ride and a powerful 6.6L V12, the Rolls-Royce Wraith is a perfect rental to get.
                </p>
                <div class="read-more">
                <a class="about-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Book Now</i></a>
                </div>
                <div class="collapse" id="collapseExample">
                  <p></p>
                  <form action="wraithbooking.php" class="user" method="post" enctype="multiport/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="startDate" placeholder="Start Date - mm/dd/yyyy" ><!--User must input first name in this textbox  --> 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="endDate" placeholder="End Date - mm/dd/yyyy" ><!--User must input last nae in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="deposit" placeholder="Minimum Deposit (≥ $400)" > <!--User must input Username in this textbox --> 
                  </div> 
 
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="custCreditCard" placeholder="Credit Card Number" ><!--User must input Password in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    Delivery Option:&#8205; &#8205; 
                    <input type="radio" id="yes" name="deliveryOption" value="Yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="deliveryOption" value="No">
                    <label for="no">No</label>
                  </div> 
                </div>
                <div class="read-more">
                <input type="submit" value="Place Booking"><!--If the user has inputed a value in all the required fields above then the sugmit buton will call to the databse if not then user will be prompt to which field thwey have not submitted--> 
                  
                </input>
                </div>
              </form>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry" id="lc">

              <div class="owl-carousel portfolio-details-carousel">
              <img src="assets/img/cars/lc500/lc1" class="img-fluid" alt="">
              <img src="assets/img/cars/lc500/lc2" class="img-fluid" alt="">
              <img src="assets/img/cars/lc500/lc3" class="img-fluid" alt="">
              <img src="assets/img/cars/lc500/lc4" class="img-fluid" alt="">
            </div>

              <h2 class="entry-title">
                <a>Lexus LC500</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a>2+2 Seater</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-calendar"></i> <a><time datetime="2020-01-01">2018</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-dollar"></i> <a>450/day</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  The LC500 is known for its roaring V8 engine that revs up to 7800 RPM. With its futuristic looks, this car definitely turn heads when driving this through the GTA. The interior is stylish and yet comfortable to provide you the best driving experience.
                </p>
                <div class="read-more">
                <a class="about-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Book Now</i></a>
                </div>
                <div class="collapse" id="collapseExample">
                  <p></p>
                  <form action="lcbooking.php" class="user" method="post" enctype="multiport/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="startDate" placeholder="Start Date - mm/dd/yyyy" ><!--User must input first name in this textbox  --> 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="endDate" placeholder="End Date - mm/dd/yyyy" ><!--User must input last nae in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="deposit" placeholder="Minimum Deposit (≥ $225)" > <!--User must input Username in this textbox --> 
                  </div> 
 
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="custCreditCard" placeholder="Credit Card Number" ><!--User must input Password in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    Delivery Option:&#8205; &#8205; 
                    <input type="radio" id="yes" name="deliveryOption" value="Yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="deliveryOption" value="No">
                    <label for="no">No</label>
                  </div> 
                </div>
                <div class="read-more">
                <input type="submit" value="Place Booking"><!--If the user has inputed a value in all the required fields above then the sugmit buton will call to the databse if not then user will be prompt to which field thwey have not submitted--> 
                  
                </input>
                </div>
              </form>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry" id="720s">

              <div class="owl-carousel portfolio-details-carousel">
              <img src="assets/img/cars/720s/mc1" class="img-fluid" alt="">
              <img src="assets/img/cars/720s/mc2" class="img-fluid" alt="">
              <img src="assets/img/cars/720s/mc3" class="img-fluid" alt="">
              <img src="assets/img/cars/720s/mc4" class="img-fluid" alt="">
            </div>

              <h2 class="entry-title">
                <a>McLaren 720S</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">2-Seater</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-calendar"></i> <a><time datetime="2020-01-01">2018</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-dollar"></i> <a>1000/day</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  McLarens are known for their racing history, and this car definitely has its roots. The 720S provides an immense driving experience with its 4.0L twin-turbocharged V8, and its lighweight, carbon-fiber tub.  
                </p>
                <div class="read-more">
                <a class="about-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Book Now</i></a>
                </div>
                <div class="collapse" id="collapseExample">
                  <p></p>
                  <form action="720sbooking.php" class="user" method="post" enctype="multiport/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="startDate" placeholder="Start Date - mm/dd/yyyy" ><!--User must input start date in this textbox  --> 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="endDate" placeholder="End Date - mm/dd/yyyy" ><!--User must input end date in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="deposit" placeholder="Minimum Deposit (≥ $500)" > <!--User must input deposit in this textbox --> 
                  </div> 
 
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="custCreditCard" placeholder="Credit Card Number" ><!--User must input credit card number in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    Delivery Option:&#8205; &#8205; 
                    <input type="radio" id="yes" name="deliveryOption" value="Yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="deliveryOption" value="No">
                    <label for="no">No</label>
                  </div> 
                </div>
                <div class="read-more">
                <input type="submit" value="Place Booking"><!--If the user has inputed a value in all the required fields above then the submit buton will call to the databse if not then user will be prompt to which field thwey have not submitted--> 
                  
                </input>
                </div>
              </form>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry" id="mods">

              <div class="owl-carousel portfolio-details-carousel">
              <img src="assets/img/cars/models/s1" class="img-fluid" alt="">
              <img src="assets/img/cars/models/s2" class="img-fluid" alt="">
              <img src="assets/img/cars/models/s3" class="img-fluid" alt="">
              <img src="assets/img/cars/models/s4" class="img-fluid" alt="">
            </div>

              <h2 class="entry-title">
                <a>Tesla Model S</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a>5-Seater</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-calendar"></i> <a><time datetime="2020-01-01">2018</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-dollar"></i> <a>400/day</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  The Tesla Model S P100D is an all-electric sedan that checks all the boxes. It is luxurious, practical, sporty, and efficient. This vehicle is also a favorite among the fleet, as there is nothing more that it needs to be perfect.  
                </p>
                <div class="read-more">
                <a class="about-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Book Now</i></a>
                </div>
                <div class="collapse" id="collapseExample">
                  <p></p>
                  <form action="modsbooking.php" class="user" method="post" enctype="multiport/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="startDate" placeholder="Start Date - mm/dd/yyyy" ><!--User must input first name in this textbox  --> 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="endDate" placeholder="End Date - mm/dd/yyyy" ><!--User must input last nae in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="deposit" placeholder="Minimum Deposit (≥ $200)" > <!--User must input Username in this textbox --> 
                  </div> 
 
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="custCreditCard" placeholder="Credit Card Number" ><!--User must input Password in this textbox --> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    Delivery Option:&#8205; &#8205; 
                    <input type="radio" id="yes" name="deliveryOption" value="Yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="deliveryOption" value="No">
                    <label for="no">No</label>
                  </div> 
                </div>
                <div class="read-more">
                <input type="submit" value="Place Booking"><!--If the user has inputed a value in all the required fields above then the sugmit buton will call to the databse if not then user will be prompt to which field thwey have not submitted--> 
                  
                </input>
                </div>
              </form>
                </div>
              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">


              <!-- Shows the electric cars that are availble in our inventory -->
              <h3 class="sidebar-title">Electric Cars</h3>
              <h5 style="font-family: sans-serif"></h5>
              <h6 style="margin-left: auto; margin-right: auto;">
              <?php
                $queryElectric = "SELECT vehicleMake, vehicleModel, vehicleType, vehiclePrice FROM vehicles WHERE vehicleMake = 'Tesla' OR vehicleMake = 'Porsche' GROUP BY vehicleID;";
                $electricResult = mysqli_query($connection, $queryElectric);
                echo "<table border='1' style='margin-left: auto; margin-right: auto; font-family: sans-serif'><tr><th>Vehicle Make</th><th> Vehicle Model </th><th>Vehicle Type</th><th>Price</th></tr>";

                //Inputs data from the query into the table created
                while($row = mysqli_fetch_assoc($electricResult)){
                  echo "<tr>";
                  echo "<td>" . $row['vehicleMake'] . "</td>";
                  echo "<td>" . $row['vehicleModel'] . "</td>";
                  echo "<td>" . $row['vehicleType'] . "</td>";
                  echo "<td>" . $row['vehiclePrice'] . "</td>";
                  echo "</tr>";
                }
                echo "</table>"; ?></h6>

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <!-- Contact infomration for further inquiries and questions-->
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
