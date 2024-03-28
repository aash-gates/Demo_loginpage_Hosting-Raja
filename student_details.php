<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #FF416C, #FF4B2B);
            color: #fff;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        .card-header {
            background-color: rgba(255, 255, 255, 0.5);
            color: #333;
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
        }

        .student-details p {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .student-details h2 {
            margin-bottom: 20px;
        }

        .btn-back {
            background-color: #fff;
            color: #333;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            margin-right: 10px;
            text-decoration: none;
        }

        .btn-back:hover {
            background-color: #eee;
        }

        .btn-action {
            background-color: transparent;
            border: 2px solid #fff;
            color: #fff;
            border-radius: 20px;
            padding: 10px 20px;
            margin-right: 10px;
            text-decoration: none;
        }

        .btn-action:hover {
            background-color: #fff;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Student Profile</h2>
            </div>
            <div class="card-body student-details">
                <?php 
                // Include your db_connect.php file to establish a database connection
                include 'db_connect.php';

                // Retrieve student details based on the ID passed through GET parameter
                if (isset($_GET['id'])) {
                    $student_id = $_GET['id'];
                    
                    // Prepare the SQL statement to prevent SQL injection
                    $sql_student_details = $connection->prepare("SELECT * FROM StudentRecords WHERE student_id = ?");
                    $sql_student_details->bind_param("i", $student_id);
                    $sql_student_details->execute();
                    $result_student_details = $sql_student_details->get_result();
                    
                    if ($result_student_details->num_rows > 0) {
                        $student_details = $result_student_details->fetch_assoc();
                    } else {
                        echo "<p>No student details found for ID: " . $student_id . "</p>";
                    }
                } else {
                    echo "<p>Invalid request.</p>";
                }
                ?>

                <?php if (isset($student_details)): ?>
                    <h2><?php echo $student_details['full_name']; ?></h2>
                    <p><strong>Student ID:</strong> <?php echo $student_details['student_id']; ?></p>
                    <p><strong>Phone Number:</strong> <?php echo $student_details['phone_number']; ?></p>
                    <p><strong>Date of Birth:</strong> <?php echo $student_details['dob']; ?></p>
                    <p><strong>Mother Tongue:</strong> <?php echo $student_details['mother_tongue']; ?></p>
                    <p><strong>Blood Group:</strong> <?php echo $student_details['blood_group']; ?></p>
                    <p><strong>Known Dust Allergies:</strong> <?php echo $student_details['known_dust_allergies']; ?></p>
                    <p><strong>Mother Name:</strong> <?php echo $student_details['mother_name']; ?></p>
                    <p><strong>Father Name:</strong> <?php echo $student_details['father_name']; ?></p>
                    <p><strong>Nationality:</strong> <?php echo $student_details['nationality']; ?></p>
                    <a href="dashboard.php" class="btn btn-back">Back to Dashboard</a>
                    <a href="edit_student.php?id=<?php echo $student_id; ?>" class="btn btn-action">Edit</a>
                    <a href="delete_student.php?id=<?php echo $student_id; ?>" class="btn btn-action">Delete</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// Close prepared statement and database connection
if (isset($sql_student_details)) {
    $sql_student_details->close();
}
$connection->close();
?>
