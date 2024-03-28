<?php
// Include your db_connect.php file to establish a database connection
include 'db_connect.php';

// Check if connection is established
if (!$connection) {
    // If connection failed, display error message and terminate script
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve student details based on the ID passed through GET parameter
if (isset($_GET['id'])) {
    $student_id = $_GET['id'];
    
    $sql_student_details = "SELECT * FROM StudentRecords WHERE student_id = $student_id";
    $result_student_details = $connection->query($sql_student_details);
    
    if ($result_student_details->num_rows > 0) {
        $student_details = $result_student_details->fetch_assoc();
    } else {
        echo "Student not found.";
    }
} else {
    echo "Invalid request.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style>
        /* CSS styles here */
    </style>
</head>
<body>
    <h1>Student Details</h1>
    <?php if (isset($student_details)): ?>
    <h2><?php echo $student_details['full_name']; ?></h2>
    <p>Student ID: <?php echo $student_details['student_id']; ?></p>
    <p>Phone Number: <?php echo $student_details['phone_number']; ?></p>
    <p>Date of Birth: <?php echo $student_details['dob']; ?></p>
    <p>Mother Tongue: <?php echo $student_details['mother_tongue']; ?></p>
    <p>Blood Group: <?php echo $student_details['blood_group']; ?></p>
    <p>Known Dust Allergies: <?php echo $student_details['known_dust_allergies']; ?></p>
    <p>Mother Name: <?php echo $student_details['mother_name']; ?></p>
    <p>Father Name: <?php echo $student_details['father_name']; ?></p>
    <!-- Display other student details here -->
    <?php else: ?>
    <p>No student details found.</p>
    <?php endif; ?>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
