<?php
// Include your db_connect.php file to establish a database connection
include 'db_connect.php';

// Check if connection is established
// Retrieve student details based on the ID passed through GET parameter
if (isset($_GET['id'])) {
    $student_id = $_GET['id'];
    
    $sql_student_details = "SELECT * FROM StudentRecords WHERE student_id = $student_id";
    $result_student_details = $conn->query($sql_student_details);
    
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
