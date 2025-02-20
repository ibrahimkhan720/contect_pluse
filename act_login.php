<?php
session_start();
require 'config/dbc.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = mysqli_query($connection, "SELECT * FROM member WHERE email='$email' AND password='$password' ") or die(mysqli_error($connection));

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_array($query);

    $_SESSION['is_valid'] = true;
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['member_id'] =  $row['id'];
    header('LOCATION:add_record.php');
} else {
    header('LOCATION:index.php');
}
