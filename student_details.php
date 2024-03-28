<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #f8bbd0;
            color: #fff;
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
        }

        .student-details p {
            margin-bottom: 5px;
        }

        .student-details h2 {
            margin-bottom: 20px;
        }

        .btn-back {
            background-color: #90caf9;
            color: #fff;
            border: none;
        }

        .btn-back:hover {
            background-color: #64b5f6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Student Details</h2>
            </div>
            <div class="card-body student-details">
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
// Close database connection
$connection->close();
?>
