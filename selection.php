<?php
$full_name=$POST_['full_name'];
$contact=$POST_['contact'];
$arrival_time=$POST_['arrival_time'];
$departure_time=$POST_['departure_time'];


include 'db.php';
$sql="INSERT INTO table(full_name,contact,arrival_time,departure_time) 
VALUES('$full_name','$contact','$arrival_time','$departure_time)";

$conn=mysqli_connect($host,$user,$pass,$dbname);
$result =mysqli_query($conn,$sql);
if($result){
    header('location:index.html');
    
} 
?>