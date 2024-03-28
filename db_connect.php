if (!$connection) {
    // If connection failed, display error message and terminate script
    die("Connection failed: " . mysqli_connect_error());
}
?>