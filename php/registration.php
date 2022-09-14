
<!DOCTYPE html>
<html>
<head>
  <title>ROS Luxury Car Rentals | Sign up Page</title>
   <!--Made with love by Mutiullah Samim -->
   
  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="assets/css/styles2.css">
</head>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Sign Up</h3>
      </div>
      <div class="card-body">
        <!-- signup page that acquires information from user  -->
        <form action="signup.php" class="user" method="post" enctype="multiport/form-data">

          <!-- Prompts user for their full name -->
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-id-card"></i></span>
            </div>
            <input type="text" class="form-control" name="custName" placeholder="Full Name" required>
          </div>

          <!-- Prompts user for their phone number -->
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-phone"></i></span>
            </div>
            <input type="text" class="form-control" name="custPhone" placeholder="Phone Number" required>
          </div>

          <!-- Prompts user for their address -->
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-address-book"></i></span>
            </div>
            <input type="text" class="form-control" name="custAddress" placeholder="Address" required>
          </div>

          <!-- Prompts user for their username -->
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="username" placeholder="Username" required> 
          </div>

          <!-- Prompts user for their password -->
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>



          <div class="form-group">
            <input type="submit" value="Sign Up" class="btn float-right login_btn">
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          <!-- When the user already has an account, the user can go to the login page to sign in from there  -->
          Already have an account?<a href="login.php">Sign in</a> 
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
