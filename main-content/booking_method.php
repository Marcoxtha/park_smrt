<?php
    session_start();
    include "database_configuration.php";

if(isset($_POST["moneyless"])){
    $sql2 = "UPDATE `booking_table` SET `booking_status`= 1 where `payment_request_id` = ".$_SESSION['pri'].";";
    mysqli_query($conn,$sql2);
    header('location:http://localhost/Park-Smart/main-content/receipt_no_eSewa.php');
}
else{
    echo 'this fasd';
    $payment_request_id = "PRID-". rand(1,1000000);
    $_SESSION['pri']=$payment_request_id;
    $sql = "INSERT INTO `booking_table` (`slot_id`,`slot_name`,`user_id`,`full_name`,`vehicle_no`,`date`,`arrival_time`,`departure_time`,`price`,`payment_request_id`) 
      VALUES (".$_SESSION['slot_id'].",'".$_SESSION['slot_name']."',".$_SESSION['user_details']['user_id'].",'".$_SESSION['user_details']['full_name']."','".$_SESSION['vehicle_num']."','".$_SESSION['date']."','".$_SESSION['arrival_time']."','".$_SESSION['departure_time']."','".$_SESSION['price']."','".$payment_request_id."');";
mysqli_query($conn,$sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <script src="../Script/bootstrap.js"></script>
</head>
<body>
<form action="https://uat.esewa.com.np/epay/main" method="POST">
    <input value=" <?=$_SESSION['price'] ?>" name="tAmt" type="hidden">
    <input value="<?=$_SESSION['price'] ?>" name="amt" type="hidden">
    <input value="0" name="txAmt" type="hidden">
    <input value="0" name="psc" type="hidden">
    <input value="0" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="<?=$payment_request_id?>" name="pid" type="hidden">
    <input value="http://localhost/Park-Smart/main-content/success_page.php?q=su" type="hidden" name="su">
    <input value="http://localhost/Park-Smart/main-content/failure-page.php?q=fu" type="hidden" name="fu">
    <input type="submit" name="withmoney" value="Book From eSewa">
</form>
<!-- <form action="" method="POST">
    <input value="Submit" type="submit">
    

            </form> -->
<form action="" method="POST">
    <!-- <button type="submit" name="moneyless" id="moneyless"class="btn btn-success">Book without Payment</button> -->
    <input type="submit" name="moneyless" value="Book without Payment">
</form>
        </body>
</html>
<?php
// if(isset($_POST["withmoney"])){
//     echo 'with money ma ';
//     $url = "https://uat.esewa.com.np/epay/main";
//     $data =[
//         'amt'=> $_SESSION['price'] ,
//         'pdc'=> 0,
//         'psc'=> 0,
//         'txAmt'=> 0,
//         'tAmt'=> $_SESSION['price'],
//         'pid'=> $payment_request_id,
//         'scd'=> 'EPAYTEST',
//         'su'=>'http://localhost/Park-Smart/main-content/success_page.php?q=su',
//         'fu'=>'http://localhost/Park-Smart/main-content/failure-page.php?q=fu'
//     ];
//         $curl = curl_init($url);
//         curl_setopt($curl, CURLOPT_POST, true);
//         curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//         curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//         $response = curl_exec($curl);
//         curl_close($curl);
//         echo 'with money ma ';
// }
?>