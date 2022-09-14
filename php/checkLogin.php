<?php
	//Starts session and connects to the database
	session_start();
	$conn = mysqli_connect('localhost:3306','root','root');

	mysqli_select_db($conn, 'car_rental');

	//Post variables to acquire username and password
	$username = $_POST['username'];
	$password = $_POST['password'];

	//Query to select the customer's username and password
	$s = "SELECT * FROM customers WHERE username = '$username' && password = '$password'";

	$result = mysqli_query($conn, $s);

	while ($row = mysqli_fetch_array($result)) {//Session vairables created
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['custName'] = $row['cname'];
    $_SESSION['custPhone'] = $row['cphone'];
    $_SESSION['custAddress'] = $row['caddress'];
    $_SESSION['custID'] = $row['customerID'];
    $_SESSION['custLicense'] = $row['clicense'];
    $_SESSION['custCredit'] = $row['custCreditCard'];
  }

  	//If username and password is there, then proceed to home page
	if (mysqli_num_rows($result) == 1){
		header('location:index.php');
	}

	//If username and password is false, then warn customer to try again
	else{
		$message = "Please make sure you either signed up, or input your information correctly!";
  		echo "<script type='text/javascript'>alert('$message'); window.location.href = 'login.php'</script>";
  		echo '</html>';
	}
?>
