<?php
session_start();
require_once 'database.php';
if (!isset($_SESSION["email"])) {
    include("loginHeader.php");
} else {
    include("header.php");
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
            <p class="subtext">Explore our flexible pricing plans designed to suit your parking needs.</p>

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
                        <button class="cta-button" name="free" onclick="confirmation()">Let's Get Started</button>
                    </form>

                    <?php
        $query = "SELECT * FROM package1";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <ul class="features-list">
                    <li><?php echo $row['Features']; ?></li>
                    
                    
            </ul><br>
                <?php
            }
        } else {
            echo "<ul><li>No record found</li></ul>";
        }
        ?>

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
                        <button class="cta-button" name="premium"
                            onclick='window.location.href = "payment.php";'>Let's Get Started</button>
                    </form>
                    <?php
        $query = "SELECT * FROM package2";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <ul class="features-list">
                    <li><?php echo $row['Features']; ?></li>
                    
                    
            </ul><br>
                <?php
            }
        } else {
            echo "<ul><li>No record found</li></ul>";
        }
        ?>

                </div>
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





if (isset($_POST["free"])) {
    

    if (!isset($_SESSION["email"])){
        header('location: login.php?error=loginfirst');
    }
    else{
        $sql = "UPDATE users SET package = 'basic' WHERE email = '{$_SESSION['email']}'";
        $result = mysqli_query($conn, $sql);
    }

}

?>