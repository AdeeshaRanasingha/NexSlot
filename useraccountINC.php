<?php
require_once 'database.php';

//taking the data from the form
if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $vehicle = $_POST["vehicle"];
    $contact = $_POST["contact"];

    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'dpImages/'. $file_name;



   

    //updating the database
    $sql = "UPDATE users set name = '$name' , vehicleNo = '$vehicle' , contactNo = '$contact', file = '$file_name' WHERE email = '$email'";

    $result = mysqli_query($conn , $sql);

    move_uploaded_file($tempname , $folder);
    
    if(!$result){
        die("querry failed");//getting errors
    }
    else{
        //again filling the details of the form with the new data entered
        $sql = "SELECT * FROM users WHERE email= '{$email}' LIMIT 1";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_array($result);//getting relevent row regard to email

            session_start();//saving the details to sessions
            $_SESSION['name'] = $row['name'];
            $_SESSION['contact'] = $row['contactNo'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['vehicle'] = $row['vehicleNo'];
            $_SESSION['ID'] = $row['idNo'];
            $_SESSION['lisence'] = $row['lisenceNo'];
            $_SESSION['submit'] = $_POST['submit'];
            $_SESSION['file'] = $row['file'];
            
            header('location:useraccount.php?successfully-updated');//redirecting to the site
        }
            
        }
}
if(isset($_POST['logout'])){

    session_start();

    // Destroy the session and clear session data
    session_unset();
    session_destroy();

    // Redirect to the login page
    header("Location: login.php");
    exit();

}

if(isset($_POST['delete'])){

    session_start();
    $sql = "DELETE FROM users WHERE email='{$_SESSION['email']}'";
    $result = mysqli_query($conn, $sql);
    header("Location: login.php");

}

if(isset($_POST['payment'])){

    header("Location: payment.php");

}
