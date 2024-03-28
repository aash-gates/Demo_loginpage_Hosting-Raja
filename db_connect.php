<<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
    die("Connection failed: " . mysqli_connect_error());
}
?>