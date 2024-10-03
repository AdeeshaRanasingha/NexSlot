<?php
session_start();
// Include database connection
require_once 'database.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get data from the form
    $username = $_POST['username'];
    $nic = $_POST['nic'];
    $licenseNumber = $_POST['license_number'];
    $vehicle = $_POST['vehicle'];
    $date = $_POST['date'];
    $startTime = $_POST['start_time'];
    $endTime = $_POST['end_time'];

    // SQL query to insert data into reservations table
    $sql = "INSERT INTO reservation (username, nic, license_number, vehicle, date, start_time, end_time ,email , package)
            VALUES ('$username', '$nic', '$licenseNumber', '$vehicle', '$date', '$startTime', '$endTime' ,'{$_SESSION['email']}' , '{$_SESSION['package']}')";

    // Print query for debugging
    echo "Executing Query: " . $sql . "<br>";

    // Execute the query and check if successful
    if ($conn->query($sql) === TRUE) {
        echo "New reservation created successfully";
    } else {
        // Display error message if insertion fails
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
