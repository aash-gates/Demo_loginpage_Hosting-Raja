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
            background-color: #64b5f6;
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
                <?php if (isset($student_details)): ?>
                    <p><strong>Name:</strong> <?php echo $student_details['full_name']; ?></p>
                    <p><strong>Student ID:</strong> <?php echo $student_details['student_id']; ?></p>
                    <p><strong>Phone Number:</strong> <?php echo $student_details['phone_number']; ?></p>
                    <p><strong>Date of Birth:</strong> <?php echo $student_details['dob']; ?></p>
                    <p><strong>Mother Tongue:</strong> <?php echo $student_details['mother_tongue']; ?></p>
                    <p><strong>Blood Group:</strong> <?php echo $student_details['blood_group']; ?></p>
                    <p><strong>Known Dust Allergies:</strong> <?php echo $student_details['known_dust_allergies']; ?></p>
                    <p><strong>Mother Name:</strong> <?php echo $student_details['mother_name']; ?></p>
                    <p><strong>Father Name:</strong> <?php echo $student_details['father_name']; ?></p>
                    <p><strong>Nationality:</strong> <?php echo $student_details['nationality']; ?></p>
                <?php else: ?>
                    <p>No student details found.</p>
                <?php endif; ?>
                <a href="dashboard.php" class="btn btn-back">Back to Dashboard</a>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// Close prepared statement and database connection
$sql_student_details->close();
$connection->close();
?>
