<?php
session_start();
    if(isset($_POST["submit"])){
        $email = $_SESSION["email"];
        $name = $_POST["name"];
        $nic = $_POST["nic"];
        $licence = $_POST["licence"];
       $vehicle = $_POST["vehicle"];
        $date = $_POST["date"];
        $floor = $_POST["floor"];
        $slot = $_POST["slot"];
        $package="premium";
    
        require_once 'database.php';

            //inserting data into the tables
            $sql = "INSERT INTO reservation (username,email,nic,license_number,floor,slot,package,date,vehicle) VALUES ('$name','$email','$nic','$licence','$floor','$slot','$package','$date','$vehicle') ";
            $result = mysqli_query($conn, $sql);
            echo "successful";
            header('location: viewReservationPremium.php?error=successful');//redirecting to the login page
       
    }
    
?>