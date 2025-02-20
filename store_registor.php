<?php
require 'config/dbc.php';

// Google reCAPTCHA Secret Key
$secretKey = "6LcECNkqAAAAAK5yFTxEPXGyW_w7xEmH3uV8SqaJ"; // اپنی secret key یہاں ڈالیں

// Get form data
$fullname = $_POST['fullname'];
$country = $_POST['country'];
$email = $_POST['email'];
$city = $_POST['city'];
$password = md5($_POST['password']);
$status = 'active';
$hash_key = uniqid(time());
$recaptchaResponse = $_POST['g-recaptcha-response']; // reCAPTCHA response

// Verify reCAPTCHA
$verifyURL = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse";
$response = file_get_contents($verifyURL);
$responseKeys = json_decode($response, true);

if (!$responseKeys["success"]) {
    // reCAPTCHA failed
    header("Location: register.php?error=captcha");
    exit();
}

// Check if email already exists
$get_email = mysqli_query($connection, "SELECT * FROM member WHERE email='$email'") or die(mysqli_error($connection));

if (mysqli_num_rows($get_email)) {
    header("Location: register.php?error=email_exists");
    exit();
} else {
    // Insert into database
    mysqli_query($connection, "INSERT INTO member(fullname, country, email, password, status, hash_key, city) 
    VALUES('$fullname', '$country','$email','$password','$status', '$hash_key', '$city')") or die(mysqli_error($connection));

    header("Location: index.php");
    exit();
}
