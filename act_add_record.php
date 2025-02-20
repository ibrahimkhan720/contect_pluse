<?php

session_start();
require 'config/dbc.php';


$fullname = $_POST['fullname'];
$country = $_POST['country'];
$company = $_POST['company'];
$designation = $_POST['designation'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$cp_group = $_POST['cp_group'];
$status = 'ACTIVE';
$address = $_POST['address'];
$member_id = $_SESSION['member_id'];

mysqli_query($connection, "INSERT INTO record(fullname, country, company, designation, phone, email, mobile, cp_group, status, address, member_id )
values('$fullname','$country','$company','$designation','$phone','$email','$mobile','$cp_group','$status','$address','$member_id')") or die(mysqli_error($connection));


header("LOCATION:view_record.php");
