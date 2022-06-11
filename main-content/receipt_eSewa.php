<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Report</title>
    <style>
    div {
  background-color: lightgrey;
  width: 25%;
  border: 7px solid green;
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 10px;
  padding-bottom: 10px;
  /* margin: 3px; */
  margin-left:35%;
}
body {
            background-image: url("../Images/background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        button{
          background-color:rgb(20, 148, 105);
          height:40px;
          width:50%;
          color:white;
          margin-left:25%;
          margin-top:8%;
          margin-bottom:5%;
        }
        i{
          color:purple;
        }
        a{
          font-size:larger;
          /* margin-top:5%; */
          text-decoration:none;
          font-weight:bolder;
          margin-left:30%;
          
        }
</style>
</head>
<body>
<div>
<h4>Name:  <?= $_SESSION['user_details']['full_name']?></h4>
<h4>Email:  <?= $_SESSION['user_details']['email']?></h4>
<h4>Date:  <?= $_SESSION['date']?></h4>
<h4>Vehicle Number:  <?= $_SESSION['vehicle_num']?></h4>
<h4>Arrival Time:  <?=$_SESSION['arrival_time']?></h4>
<h4>Departure Time:  <?= $_SESSION['departure_time']?></h4>
<h4>Booked Slot:  <?=$_SESSION['slot_name']?></h4>
<h4>Price:  <?= $_SESSION['price']?></h4>
<h4>Mode of Payment:  Paid through eSewa</h4>

<button onclick="window.print();return false;">Save as PDF</button>
</div>
<a href="http://localhost/Park-Smart/main-content/after-login.php">Return to Home</a>

</body>
</html>


<?php 
    unset($_SESSION['arrival_time']);
    unset($_SESSION['departure_time']);
    unset($_SESSION['slot_name']);
    unset($_SESSION['date']);
    unset($_SESSION['price']);
    unset($_SESSION['slot_id']);
    unset($_SESSION['vehicle_num']);


?>

<!-- <button onclick="window.print();return false;">Save as PDF</button> -->