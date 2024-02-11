<?php
// Database configuration
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "caffeine_cove";

// Establish database connection
$db = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
    
?>