

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/header.css">
    <title>NexSlot</title>
</head>
<body>
    <div class="header">
        <div class="logo"><img src="images/NexSlot.png" alt=""></div>
        <div class="menueBar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="<?php
                //checking the user has selected premium or basic package
                        if($_SESSION['package'] == 'premium'){
                            echo 'primium.php';
                        }
                        else{
                            echo 'basic.php';
                        }
                    ?>">Reservation</a>
                </li>
                <li><a href="package.php">Package</a></li>
                <li><a href="masseges.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="name" ><a href="useraccount.php">
            <?php
            //displaying name and email
                echo $_SESSION['name'];
                
            ?>
            <img src="dpImages\<?php echo $_SESSION['file'] ?>" alt="Profile Picture">
            </a>
        </div>
    </div>       
    

</body>
</html>
