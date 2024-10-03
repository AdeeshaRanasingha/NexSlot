<?php

require_once 'database.php';

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pwd = $_POST["password"];

    //checking the credentials
    $sql = "SELECT * FROM users WHERE email= '{$email}' AND password = '{$pwd}' LIMIT 1";

    $result = mysqli_query($conn,$sql);

    //if credentials are there then saving them to a session to use in further in the site
    if(mysqli_num_rows($result) > 0){
        
        $row = mysqli_fetch_array($result);

        session_start();
        $_SESSION['name'] = $row['name'];
        $_SESSION['contact'] = $row['contactNo'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['vehicle'] = $row['vehicleNo'];
        $_SESSION['ID'] = $row['idNo'];
        $_SESSION['lisence'] = $row['lisenceNo'];
        $_SESSION['package'] = $row['package'];
        $_SESSION['submit'] = $_POST['submit'];
        $_SESSION['file'] = $row['file'];

        if($row['role'] == 'admin'){

            header('location: adminPanel.php');

        }
        else if($row['role'] == 'csr'){

            header('location: masseges.php');

        }
        else{

            header('location: home.php');

        }
        

        
    }
    //if credentials diddnt match then redirecting to the login site with error masege
    else{
        echo "<script>alert('invalid username or password')</script>";
        
       header('location: login.php?error=invalid-username-or-password');
    }
}
else{
    header('location:login.php');

}