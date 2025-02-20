<?php
require 'config/dbc.php';

$fullname = $_POST['fullname'];
$country = $_POST['country'];
$company = $_POST['company'];
$designation = $_POST['designation'];
$phone = $_POST['phone'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$cp_group = $_POST['cp_group'];
$address = $_POST['address'];
$id = $_POST['id'];

mysqli_query($connection, "UPDATE record SET fullname='$fullname', country='$country', company='$company', designation='$designation', phone='$phone' , mobile='$mobile' , email='$email' , cp_group='$cp_group' , address='$address' WHERE id=$id") or die(mysqli_error($connection));

header("Location:view_record.php");
