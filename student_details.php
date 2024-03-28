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
    <?php else: ?>
    <p>No student details found.</p>
    <?php endif; ?>
</body>
</html>

<?php
// Close database connection
$connection->close();
?>
