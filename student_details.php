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
    <p>Nationality: <?php echo $student_details['nationality']; ?></p>
    <!-- Display other student details here -->
    <?php else: ?>
    <p>No student details found.</p>
    <?php endif; ?>
</body>
</html>

<?php
// Close database connection
$connection->close();
?>
