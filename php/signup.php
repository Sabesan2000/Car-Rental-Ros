<?php
session_start();
//include "config.php";//Uses the config.php file to  connect to databse
$connection = mysqli_connect('localhost:3306','root','root');

mysqli_select_db($connection, 'car_rental');

$cname = $_POST['custName'];
$cphone = $_POST['custPhone'];
$caddress = $_POST['custAddress'];
$username = $_POST['username'];//Declares  username to $name variable
$password = $_POST['password'];//Delcares Password to $pass variable


$s = "SELECT * FROM customers WHERE username = '$username'";//Selects for user database table called user where the function Username is eqaul to $name

$result = mysqli_query($connection, $s);


if(mysqli_num_rows($result) > 0){//Checks to see if username already exists, if exisits than a pop out message will display saying they username unavailable and once the user clicks okay it will redirect the user to the register.php page
  $message = "Username unavailable.";
  echo "<script type='text/javascript'>alert('$message'); window.location.href = 'registration.php'</script>";
  echo '</html>';
}
else{
  $reg = "INSERT INTO customers(cname, cphone, caddress, username, password) VALUES ('$cname', '$cphone', '$caddress', '$username', '$password')"; // If the username has not been used before than it will store all the data the user inputted into the databse and it will prompt a message saying Registration sucessful and once the user clicks okay it will redirect the user to the login page
  mysqli_query($connection, $reg);
  $message = "Registration successful.";
  echo "<script type='text/javascript'>alert('$message'); window.location.href = 'login.php'</script>";
}
?>
