<?php
session_start();
//include "config.php";//Uses the config.php file to  connect to databse
$connection = mysqli_connect('localhost:3306','root','root');

//Post variables to acquire information from personal information page
mysqli_select_db($connection, 'car_rental');
$cname = $_POST['custName'];
$cphone = $_POST['custPhone'];
$caddress = $_POST['custAddress'];
$username = $_POST['username'];//Declares  username to $name variable
$password = $_POST['password'];//Delcares Password to $pass variable
$clicense = $_POST['custLicense'];
$custCreditCard = $_POST['custCredit'];
$customerID = $_SESSION['custID'];


//When there is information inputted in the textbook, that information is then updated in the database
if($cphone != NULL){
	$reg = "UPDATE customers SET cphone = '$cphone' WHERE customerID = '$customerID'";
	mysqli_query($connection, $reg);
}

if($cname != NULL){
	$reg2 = "UPDATE customers SET cname = '$cname' WHERE customerID = '$customerID'";
	mysqli_query($connection, $reg2);
}

if($caddress != NULL){
	$reg3 = "UPDATE customers SET caddress = '$caddress' WHERE customerID = '$customerID'";
	mysqli_query($connection, $reg3);
}

if($username != NULL){
	$reg4 = "UPDATE customers SET username = '$username' WHERE customerID = '$customerID'";
	mysqli_query($connection, $reg4);
}

if($password != NULL){
	$reg5 = "UPDATE customers SET password = '$password' WHERE customerID = '$customerID'";
	mysqli_query($connection, $reg5);
}

if($clicense != NULL){
	$reg6 = "UPDATE customers SET clicense = '$clicense' WHERE customerID = '$customerID'";
	mysqli_query($connection, $reg6);
}

if($custCreditCard != NULL){
	$reg7 = "UPDATE customers SET custCreditCard = '$custCreditCard' WHERE customerID = '$customerID'";
	mysqli_query($connection, $reg7);
}
$message = "Update successful. Now you will return to the login page."; //Displays message to show that information is updated
echo "<script type='text/javascript'>alert('$message'); window.location.href = 'login.php'</script>"; //Redirects user to login page to login again
?>
