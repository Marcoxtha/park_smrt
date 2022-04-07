<?php
    session_start();
    session_unset($_SESSION['user_details']);
    header('location:login.php');
?>