<?php
    include("header.php");
    if(!isset($_SESSION["submit"])){
        header('location: login.php?error=login-first');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="style\package.css">
</head>
<body>

    <main>
        <section class="pricing-section">
            <h1>Pricing</h1>
            <p class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit nunc. Morbi ut convallis sapien.</p>

            <div class="pricing-cards">
                <!-- Basic Plan Card -->
                <div class="pricing-card basic">
                    <div class="card-header">
                        <span class="plan-title">Basic</span>
                    </div>
                    <div class="card-price">
                        <span class="price">free</span>
                    </div>
                    <form action="" method="POST">
                    <button class="cta-button" name="free" >Let's Get Started</button>
                    </form>
                    <ul class="features-list">
                        <li>Free for one user</li>
                        <li>Parking lot</li>
                        <li>24/7 customer service</li>
                        <li>Basic support</li>
                    </ul>
                </div>

                <!-- Premium Plan Card -->
                <div class="pricing-card premium">
                    <div class="card-header">
                        <span class="plan-title">Premium</span>
                    </div>
                    <div class="card-price">
                        <span class="price">$5 <span class="per-month">/month</span></span>
                    </div>
                    <form action="payment.php" method="POST">
                    <button class="cta-button" name="premium" onclick='window.location.href = "https://www.example.com";'>Let's Get Started</button>
                    </form>
                    <ul class="features-list">
                        <li>Max 5 users</li>
                        <li>Parking lot</li>
                        <li>24/7 customer service</li>
                        <li>Emergency service 24/7</li>
                        <li>Advance security care</li>
                        <li>Loyalty rewards</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

</body>
</html>
<?php
    include("footer.php");
?>
<?php

require_once 'database.php';

session_start();

    if(isset($_POST["free"])){
        $sql = "UPDATE users SET package = 'basic' WHERE email = '{$_SESSION['email']}'";
    $result = mysqli_query($conn , $sql);
    
    header('location:useraccount.php');

    }
   
?>