<?php

require 'config/dbc.php';

$id = $_GET['id'];

mysqli_query($connection, "DELETE from record WHERE id=$id") or die(mysqli_errno($connection));

header("LOCATION:trashcan.php");
