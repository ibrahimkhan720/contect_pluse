<?php
session_start();

require 'config/dbc.php';

$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$againpassword = $_POST['againpassword'];

$member_id = $_SESSION['member_id'];

$affected = mysqli_query($connection, "UPDATE member SET password='$againpassword' WHERE password='$oldpassword' AND id='$member_id' ") or die(mysqli_error($connection));


if ($affected) {
    session_destroy();
    header("location:index.php");
}
