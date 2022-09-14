<?php
//Starts session and connects to the database where all the tables are in
  session_start();
  $connection = mysqli_connect('localhost:3306','root','root');
  mysqli_select_db($connection, 'car_rental');

  //Session variables for requiring info for tables
  $username = $_SESSION['username'];
  $cname = $_SESSION['custName'];
  $password = $_SESSION['password'];
  $customerID = $_SESSION['custID'];
  $clicense = $_SESSION['custLicense'];
  $custCreditCard = $_SESSION['custCredit'];

//Session variables for requiring info for tables
  $startDate = $_POST['startDate'];
  $endDate = $_POST['endDate'];
  $deposit = $_POST['deposit'];
  $creditCard = $_POST['custCreditCard'];
  $deliveryOption = $_POST['deliveryOption'];
  
//If the deposit is above 50% of the payment method, then insert booking and payment information into the SQL tables
if ($deposit >= 350){
  $reg = "INSERT INTO booking(customer_id, bookingStart, bookingEnd, bookingLocation, bookingDelivery, vehicleMake, vehicleModel) VALUES ('$customerID','$startDate', '$endDate', 'East York', '$deliveryOption', 'Porsche', 'Taycan Turbo S')";
  mysqli_query($connection, $reg);
  $reg2 = "INSERT INTO payment(customer_id, deposit, paymentMethod) VALUES ('$customerID', '$deposit', 'Credit Card')";
  mysqli_query($connection, $reg2);
  if($creditCard != NULL){
    $reg3 = "UPDATE customers SET custCreditCard = '$creditCard' WHERE customerID = '$customerID'";
    mysqli_query($connection, $reg3);
  }
  $message = "Booking and payment successful.";
  echo "<script type='text/javascript'>alert('$message'); window.location.href = 'inventory.php'</script>";

}

//If the deposit is less the 50% of the rental price, then print out a message to do so
else{
  $message = "Minimum Deposit must be above $350.";
  echo "<script type='text/javascript'>alert('$message'); window.location.href = 'inventory.php'</script>";
  echo '</html>';
}
?>
