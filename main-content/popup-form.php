<?php

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel='stylesheet' href='../CSS/popup-style.css'/>
    <link rel="shortcut icon" href="../Images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Book Space</title>
  </head>
  <body>
    <div class="popup">
    <div class="container">
      <form id="popup-form" action="" method="POST">
        <label for="full_name">Full Name</label>
        <input type="text" name="full_name" id="full_name">
        <span></span>
        <label for="vehicle_no">Vehicle No.</label>
        <input type="number" name="vehicle_no" id="vehicle_no">
        <span></span>
        <label for="arrival_time">Arrival Time</label>
        <input type="time" name="arrival_time" id="arrival_time">
        <span></span>
        <label for="departure_time">Departure Time</label>
        <input type="time" name="departure_time" id="departure_time">
        <span></span>
        <button type="submit">Book Now</button>
      </form>
    </div>
    </div>
  </body>
  <style>
    #popup-form{
      display:none;
      z-index: 9;
    }
  </style>
</html>
