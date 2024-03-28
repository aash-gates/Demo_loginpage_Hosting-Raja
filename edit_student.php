<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
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

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border: none;
            border-bottom: 2px solid #fff;
            background-color: transparent;
            color: #fff;
        }

        .form-control:focus {
            border-color: #ccc;
            outline: none;
        }

        .btn-save, .btn-discard, .btn-back {
            background-color: #fff;
            color: #333;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            margin-right: 10px;
            text-decoration: none;
        }

        .btn-save:hover, .btn-discard:hover, .btn-back:hover {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Edit Student</h2>
            </div>
            <div class="card-body">
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
                    <form action="update_student.php" method="post">
                        <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo $student_details['full_name']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $student_details['phone_number']; ?>">
                        </div>
