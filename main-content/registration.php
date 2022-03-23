<?php
$message = "";
$error_message = "";
include "database_configuration.php";
if($_POST){
        $fullName = $_REQUEST['full-name'];
        $email = $_REQUEST['email'];
        $contact = $_REQUEST['contact'];
        $userName = $_REQUEST['user-name'];
        $password = $_REQUEST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $checkUser = "SELECT `user_name` from `user_details` where user_name='$userName'";
        $userResult = mysqli_query($conn,$checkUser);
        $finalResult = mysqli_num_rows($userResult);
        if($finalResult>0){
            $error_message = "User name already exist try another";
        }
        else{
            $createUser = "INSERT into `user_details` (`full_name`,`email`,`contact`,`user_name`,`password`) VALUES ('$fullName','$email','$contact','$userName','$hashedPassword')";
            if(mysqli_query($conn,$createUser)){
                $message = "User created successfully";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .="Content-type:text/html; charset=iso-8859-1"."\r\n";
                $headers .="From: less.secure.email.for.students@gmail.com"."\r\n";
                $subject = "Welcome to Park Smart";
                $email = "$email";
                $body = "Hello $fullName,<br>You have used this email to sign up to Park Smart.<br><br>Regards,<br>Park Smart Team";
                $sendMail = mail($email,$subject,$body,$headers);
            }
            else{
                $error_message = "Couldn't create user";
            }
        }
        mysqli_close($conn);
    }
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/registration-style.css" />
    <script src="../Script/signupValidation.js"></script>
    <title>Sign up</title>
</head>

<body>
    <div id="login">
        <h2 style="text-align: center;">Sign up Form</h2>
        <div class="container">
            <form action="" method="POST" id="signUpForm" onsubmit="event.preventDefault();validation();">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" placeholder="Enter your full name" name="full-name">
                <span id="full-name-validation" class="error-message"></span>
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter your email" name="email">
                <span id="email-validation" class="error-message"></span>
                <label for="contact">Contact</label>
                <input type="number" id="contact" placeholder="Enter your contact number" name="contact">
                <span id="contact-validation" class="error-message"></span>
                <label for="user-name">User Name</label>
                <input type="text" id="user-name" placeholder="Create a user name" name="user-name">
                <span id="user-name-validation" class="error-message"></span>
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Create a password" name="password">
                <span id="password-validation" class="error-message"></span>
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" placeholder="Confirm your password" name="confirm-password">
                <span id="confirm-password-validation" class="error-message"></span>
                <span class="backend-error-message"><?= $error_message?></span>
                <span class="message"><?= $message?></span>
                <input type="submit" value="Signup">
                <span>Already have an accout <a href="login.php">Proceed to login</a></span>
            </form>
        </div>
    </div>
</body>
</html>
