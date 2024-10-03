<?php
session_start();

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $name = $_POST["name"];
    $vehicle = $_POST["vehicle"];
    $id = $_POST["ID"];
    $licence = $_POST["licence"];
    $contact = $_POST["contact"];

    require_once 'database.php';
    
    $sql = "SELECT * FROM users WHERE email = '{$email}' LIMIT 1"; //sql for validating weather e mail already exist or not

    $resultset = mysqli_query($conn, $sql);

    if(mysqli_num_rows($resultset) ==1){
        header('location:signup.php?error=email-already-exist');

    }
    else{
        //if not exist creating data on database
        $sql = "INSERT INTO users (name,email,password,vehicleNo,idNo,lisenceNo,contactNo) VALUES ('{$name}','{$email}','{$pwd}','{$vehicle}','{$id}','{$licence}','{$contact}') ";
        $result = mysqli_query($conn, $sql);
        echo "successful";
        header('location: login.php');//redirecting to the login page
    }
}
else{
    header('location:login.php');
}