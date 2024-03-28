// Attempt to establish a connection to the database
$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check if the connection was successful
if (!$connection) {
    // If connection failed, display error message and terminate script
    die("Connection failed: " . mysqli_connect_error());
}
?>