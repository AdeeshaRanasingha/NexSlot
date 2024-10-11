<?php
session_start();

// database connection
require_once 'database.php';




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get data from the form
    $username = $_POST['username'];
    $nic = $_POST['nic'];
    $licenseNumber = $_POST['license_number'];
    $vehicle = $_POST['vehicle'];
    $date = $_POST['date'];
    $startTime = $_POST['start_time'];
    $endTime = $_POST['end_time'];
    $floor = $_POST['floor'];
    $slot = $_POST['slot'];

    // SQL query to insert data into reservations table
    $sql = "INSERT INTO reservation (username, nic, license_number, vehicle, date, start_time, end_time ,email , package , floor , slot)
            VALUES ('$username', '$nic', '$licenseNumber', '$vehicle', '$date', '$startTime', '$endTime' ,'{$_SESSION['email']}' , '{$_SESSION['package']}' , '$floor' , '$slot')";



    // Execute the query and check if successful
    if ($conn->query($sql) === TRUE) {
        header('location: basic.php');
        echo "New reservation created successfully";
    } else {
      
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
