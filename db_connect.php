<?php
// Database configuration
$db_host = "localhost"; // Hostname of the database server
$db_username = "root"; // Username for database access
$db_password = ""; // Password for database access
$db_name = "SMS.sql"; // Name of the database

// Attempt to establish a connection to the database
$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check if the connection was successful
    die("Connection failed: " . mysqli_connect_error());
}
?>