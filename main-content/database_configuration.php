<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'park_smart';
$conn = mysqli_connect($serverName,$userName,$password,$databaseName);
if($conn->connect_error){
    die("Couldn't connect to database");
}
?>