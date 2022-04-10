<?php
include "database_configuration.php";
$i = 1;
session_start();
$sql1 = 'SELECT * FROM `slots` WHERE `slot_name` LIKE "a%"';
$sql2 = 'SELECT * FROM `slots` WHERE `slot_name` LIKE "b%"';
$sql3 = 'SELECT * FROM `slots` WHERE `slot_name` LIKE "c%"';
$sql4 = 'SELECT * FROM `slots` WHERE `slot_name` LIKE "d%"';
$sql5 = 'SELECT * FROM `slots` WHERE `slot_name` LIKE "e%"';
$sql6 = 'SELECT * FROM `slots` WHERE `slot_name` LIKE "f%"';
$run1 = mysqli_query($conn,$sql1);
$run2 = mysqli_query($conn,$sql2);
$run3 = mysqli_query($conn,$sql3);
$run4 = mysqli_query($conn,$sql4);
$run5 = mysqli_query($conn,$sql5);
$run6 = mysqli_query($conn,$sql6);
// $row1 = mysqli_fetch_array($run1);
// $row2 = mysqli_fetch_array($run2);
// $row3 = mysqli_fetch_array($run3);
// $row4 = mysqli_fetch_array($run4);
// $row5 = mysqli_fetch_array($run5);
// $row6 = mysqli_fetch_array($run6);
if (!isset($_SESSION['user_details'])) {
    header('location:login.php');
}

else{

}?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel='stylesheet' href='../CSS/popup-style.css'/>
    <link rel='stylesheet' href='../CSS/after-login.css' />
    <title>Park Smart</title>
  </head>

  <body>
  
    <nav>
      <img src="../Images/new-logo.png">
      <div id="overflow">
      <ul>
        
          <li><?= $_SESSION['user_details']['full_name'] ?>
            <ul>
              <li><a>My History</a></li>
              <li><a href="user-logout.php">Logout</a></li>
            </ul>
          </li>
        
      </ul>
      </div>
    </nav>
    <div class="center-main-div">
      <div class="main-div">
        <div class="bike-row">
          <!-- <div class="bike" id="a1">A1</div>
          <div class="bike" id="a2">A2</div>
          <div class="bike" id="a3">A3</div>
          <div class="bike" id="a4">A4</div>
          <div class="bike" id="a5">A5</div>
          <div class="bike" id="a6">A6</div>
          <div class="bike" id="a7">A7</div>
          <div class="bike" id="a8">A8</div>
          <div class="bike" id="a9">A9</div>
          <div class="bike" id="a10">A10</div>
          <div class="bike" id="a11">A11</div> -->
          <?php
            while($row1=$run1->fetch_assoc()){
              if($row1['slot_status']==0){?>
                  <div class="bike" id="<?=$row1['slot_id']?>"><?=$row1['slot_name']?></div>
              <?php }
                else{?>
                  <div class="bike-booked" id="<?=$row1['slot_id']?>"><?=$row1['slot_name']?></div>
                <?php }
            }?>
        </div>
        <div class="road"></div>
        <div class="bike-row">
          <!-- <div class="bike" id="b1">B1</div>
          <div class="bike" id="b2">B2</div>
          <div class="bike" id="b3">B3</div>
          <div class="bike" id="b4">B4</div>
          <div class="bike" id="b5">B5</div>
          <div class="bike" id="b6">B6</div>
          <div class="bike" id="b7">B7</div>
          <div class="bike" id="b8">B8</div>
          <div class="bike" id="b9">B9</div>
          <div class="bike" id="b10">B10</div>
          <div class="bike" id="b11">B11</div> -->
          <?php
            while($row2=$run2->fetch_assoc()){
              if($row2['slot_status']==0){?>
                  <div class="bike" id="<?=$row2['slot_id']?>"><?=$row2['slot_name']?></div>
              <?php }
                else{?>
                  <div class="bike-booked" id="<?=$row2['slot_id']?>"><?=$row2['slot_name']?></div>
                <?php }
            }?>
        </div>
        <div class="road"></div>
        <div class="bike-row">
          <!-- <div class="bike" id="c1">C1</div>
          <div class="bike" id="c2">C2</div>
          <div class="bike" id="c3">C3</div>
          <div class="bike" id="c4">C4</div>
          <div class="bike" id="c5">C5</div>
          <div class="bike" id="c6">C6</div>
          <div class="bike" id="c7">C7</div>
          <div class="bike" id="c8">C8</div>
          <div class="bike" id="c9">C9</div>
          <div class="bike" id="c10">C10</div>
          <div class="bike" id="c11">C11</div> -->
          <?php
            while($row3=$run3->fetch_assoc()){
              if($row3['slot_status']==0){?>
                  <div class="bike" id="<?=$row3['slot_id']?>"><?=$row3['slot_name']?></div>
              <?php }
                else{?>
                  <div class="bike-booked" id="<?=$row3['slot_id']?>"><?=$row3['slot_name']?></div>
                <?php }
            }?>
        </div>
        <div class="road"></div>
        <div class="bike-row">
          <!-- <div class="bike" id="d1">D1</div>
          <div class="bike" id="d2">D2</div>
          <div class="bike" id="d3">D3</div>
          <div class="bike" id="d4">D4</div>
          <div class="bike" id="d5">D5</div>
          <div class="bike" id="d6">D6</div>
          <div class="bike" id="d7">D7</div>
          <div class="bike" id="d8">D8</div>
          <div class="bike" id="d9">D9</div>
          <div class="bike" id="d10">D10</div>
          <div class="bike" id="d11">D11</div> -->
          <?php
            while($row4=$run4->fetch_assoc()){
              if($row4['slot_status']==0){?>
                  <div class="bike" id="<?=$row4['slot_id']?>"><?=$row4['slot_name']?></div>
              <?php }
                else{?>
                  <div class="bike-booked" id="<?=$row4['slot_id']?>"><?=$row4['slot_name']?></div>
                <?php }
            }?>
        </div>
        <div class="road"></div>
        <div class="car-row">
          <!-- <div class="car" id="e1">E1</div>
          <div class="car" id="e2">E2</div>
          <div class="car" id="e3">E3</div>
          <div class="car" id="e4">E4</div>
          <div class="car" id="e5">E5</div>
          <div class="car" id="e7">E6</div> -->
          <?php
            while($row5=$run5->fetch_assoc()){
              if($row5['slot_status']==0){?>
                  <div class="bike" id="<?=$row5['slot_id']?>"><?=$row5['slot_name']?></div>
              <?php }
                else{?>
                  <div class="bike-booked" id="<?=$row5['slot_id']?>"><?=$row5['slot_name']?></div>
                <?php }
            }?>
        </div>
        <div class="road"></div>
        <div class="car-row">
          <!-- <div class="car" id="f1">F1</div>
          <div class="car" id="f2">F2</div>
          <div class="car" id="f3">F3</div>
          <div class="car" id="f4">F4</div>
          <div class="car" id="f5">F5</div>
          <div class="car" id="f6">F6</div> -->
          <?php
            while($row6=$run6->fetch_assoc()){
              if($row6['slot_status']==0){?>
                  <div class="bike" id="<?=$row6['slot_id']?>"><?=$row6['slot_name']?></div>
              <?php }
                else{?>
                  <div class="bike-booked" id="<?=$row6['slot_id']?>"><?=$row6['slot_name']?></div>
                <?php }
            }?>
        </div>
      </div>
    
      
    <div id="form">
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
        <button class="btn cancel" onclick="closeForm()">Close</button> 
      </form>
    </div>
    </div>
       
      
</div>
  </body>
  <script src="../Script/script.js"></script>
  <style>
    #form{
      display:none;     
      
    }
    form{
      margin:
    }
  </style>

  </html>
<?php}?>