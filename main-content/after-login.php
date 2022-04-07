<?php
    session_start();
    if(isset($_SESSION['user_details'])){?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="./../Script/script.js"></script>
    <link rel='stylesheet' href='../CSS/after-login.css' />
    <title>Park Smart</title> 
  </head>
  <body>
  <nav>
        <img src="../Images/new-logo.png">
        <ul>
          <li><?=$_SESSION['user_details']['full_name']?>
            <ul>
                <li><a>My History</a></li>
                <li><a>Logout</a></li>
            </ul>
          </li>
        </ul>
    </nav>
    <div class="center-main-div">
      <div class="main-div">
        <div class="bike-row">
          <div class="bike" id="a1">A1</div>
          <div class="bike" id="a2">A2</div>
          <div class="bike" id="a3">A3</div>
          <div class="bike" id="a4">A4</div>
          <div class="bike" id="a5">A5</div>
          <div class="bike" id="a6">A6</div>
          <div class="bike" id="a7">A7</div>
          <div class="bike" id="a8">A8</div>
          <div class="bike" id="a9">A9</div>
          <div class="bike" id="a10">A10</div>
          <div class="bike" id="a11">A11</div>
        </div>
        <div class="road"></div>
        <div class="bike-row">
          <div class="bike" id="b1">B1</div>
          <div class="bike" id="b2">B2</div>
          <div class="bike" id="b3">B3</div>
          <div class="bike" id="b4">B4</div>
          <div class="bike" id="b5">B5</div>
          <div class="bike" id="b6">B6</div>
          <div class="bike" id="b7">B7</div>
          <div class="bike" id="b8">B8</div>
          <div class="bike" id="b9">B9</div>
          <div class="bike" id="b10">B10</div>
          <div class="bike" id="b11">B11</div>
        </div>
        <div class="road"></div>
        <div class="bike-row">
          <div class="bike" id="c1">C1</div>
          <div class="bike" id="c2">C2</div>
          <div class="bike" id="c3">C3</div>
          <div class="bike" id="c4">C4</div>
          <div class="bike" id="c5">C5</div>
          <div class="bike" id="c6">C6</div>
          <div class="bike" id="c7">C7</div>
          <div class="bike" id="c8">C8</div>
          <div class="bike" id="c9">C9</div>
          <div class="bike" id="c10">C10</div>
          <div class="bike" id="c11">C11</div>
        </div>
        <div class="road"></div>
        <div class="bike-row">
          <div class="bike" id="d1">D1</div>
          <div class="bike" id="d2">D2</div>
          <div class="bike" id="d3">D3</div>
          <div class="bike" id="d4">D4</div>
          <div class="bike" id="d5">D5</div>
          <div class="bike" id="d6">D6</div>
          <div class="bike" id="d7">D7</div>
          <div class="bike" id="d8">D8</div>
          <div class="bike" id="d9">D9</div>
          <div class="bike" id="d10">D10</div>
          <div class="bike" id="d11">D11</div>
        </div>
        <div class="road"></div>
        <div class="car-row">
          <div class="car" id="e1">E1</div>
          <div class="car" id="e2">E2</div>
          <div class="car" id="e3">E3</div>
          <div class="car" id="e4">E4</div>
          <div class="car" id="e5">E5</div>
          <div class="car" id="e7">E6</div>
        </div>
        <div class="road"></div>
        <div class="car-row">
            <div class="car" id="f1">F1</div>
            <div class="car" id="f2">F2</div>
            <div class="car" id="f3">F3</div>
            <div class="car" id="f4">F4</div>
            <div class="car" id="f5">F5</div>
            <div class="car" id="f6">F6</div>
      </div>
    </div>
  </body>
</html>
<?php
}
else{
  header('location:login.php');
}
?>