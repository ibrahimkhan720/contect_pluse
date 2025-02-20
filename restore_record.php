<?php
require 'config/dbc.php';

$id = $_GET['id'];

$query = mysqli_query($connection, "UPDATE record set status = 'active' WHERE id=$id") or die(mysqli_error($connection));

header("Location:trashcan.php");
