<?php
$msg = "";
// session_start();
include "database_configuration.php";
if ($_POST) {
  $date = date("Y-m-d");
  $slot_id = $_REQUEST['selected_slot'];
  //to get slot name
  $selected_slot_class = $_REQUEST['selected_slot_class'];
  $full_name = $_SESSION['user_details']['full_name'];
  $user_id = $_SESSION['user_details']['user_id'];
  $vehicle_num = $_REQUEST['vehicle_no'];
  $arrival_time = $_REQUEST['arrival_time'];
  $departure_time = $_REQUEST['departure_time'];
  $price = $_REQUEST['price'];
  if($price==""){
    $msg = "Please calculate the price first";
  }
  else{
    $sql = "INSERT INTO `booking_table` (`slot_id`,`user_id`,`full_name`,`vehicle_no`,`date`,`arrival_time`,`departure_time`) 
                VALUES ($slot_id,$user_id,'$full_name','$vehicle_num','$date','$arrival_time','$departure_time');";
  $sql2 = "UPDATE `slots` SET `slot_status` = 1 where `slot_id` = $slot_id";
  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn, $sql2);
  if ($result != false) {
    $msg = "Booked Successfully";
    header('location:bill-report.php');
  }
  }
  
}
// $selected_slot_class = $_GET['selected_slot_class'];
// echo  $selected_slot_class;
//for price 


?>