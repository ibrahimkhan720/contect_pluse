
<?php
session_start();
require 'config/dbc.php';

// Get data from URL
$email = $_GET['email'];
$hash = $_GET['hash'];

// Validate email and hash
$query = mysqli_query($connection, "SELECT * FROM member WHERE email='$email' AND hash_key='$hash'");

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_array($query);

    // Check if the account is already active
    if ($row['status'] == 'inactive') {
        // Update the status to active
        $updateQuery = mysqli_query($connection, "UPDATE member SET status='active' WHERE email='$email' AND hash_key='$hash'");

        if ($updateQuery) {
            echo "Your email has been successfully verified. You can now <a href='login.php'>login</a>.";
        } else {
            echo "There was an error verifying your email. Please try again later.";
        }
    } else {
        echo "Your account is already verified.";
    }
} else {
    echo "Invalid verification link.";
}
?>
