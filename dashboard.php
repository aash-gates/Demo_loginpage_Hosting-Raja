<?php
// Include your db_connect.php file to establish a database connection
include 'db_connect.php';

// Check if connection is established
if (!$connection) {
    // If connection failed, display error message and terminate script
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve total entries count
$sql_count = "SELECT COUNT(*) AS total_entries FROM StudentRecords";
$result_count = $conn->query($sql_count);
$total_entries = ($result_count->num_rows > 0) ? $result_count->fetch_assoc()['total_entries'] : 0;

// Retrieve full name and student ID of all students
$sql_students = "SELECT full_name, student_id FROM StudentRecords";
$result_students = $conn->query($sql_students);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* CSS styles here */
    </style>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Total Entries: <?php echo $total_entries; ?></p>
    
    <h2>List of Students</h2>
    <table border="1">
        <tr>
            <th>Full Name</th>
            <th>Student ID</th>
        </tr>
        <?php
        if ($result_students->num_rows > 0) {
            while ($row = $result_students->fetch_assoc()) {
                echo "<tr>";
                echo "<td><a href='student_details.php?id=" . $row['student_id'] . "'>" . $row['full_name'] . "</a></td>";
                echo "<td>" . $row['student_id'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No students found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
