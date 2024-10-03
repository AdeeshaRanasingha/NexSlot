<?php
    
    session_start();
    if(!isset($_SESSION["submit"])){
        include("loginHeader.php");
    }
    else{
        include("header.php");
    }

    require_once 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexSlot - User Account</title>
    <link rel="stylesheet" href="style/useraccount.css">
</head>
<body>

    
    <div class="main">
        <div class="account-container">
            
            <div class="sidebar">
                <div class="profile-pic">
                    <img src="dpImages\<?php echo $_SESSION['file'] ?>" alt="Profile Picture">
                    
                </div>
                <ul class="user-details">
                    <li>Name: <?php echo $_SESSION['name']; ?></li>
                    <li>Email: <?php echo $_SESSION['email']; ?></li>
                </ul>

                <form method="POST" action="useraccountINC.php">
                <button class="payment-btn" name="payment">Payment</button>
                <button class="delete-account-btn" name="delete">Delete Account</button>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <button class="delete-account-btn" name="logout">Logout</button>
                </form>
            </div>

            
            <div class="user-details-form">
                <form method="POST" action="useraccountINC.php" enctype="multipart/form-data">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="<?php echo $_SESSION['name']; ?>">

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly>

                    <label for="vehicle">Vehicle No.</label>
                    <input type="text" id="vehicle" name="vehicle" value="<?php echo $_SESSION['vehicle']; ?>">

                    <label for="id-passport">ID / Passport</label>
                    <input type="text" id="id-passport" name="ID" value="<?php echo $_SESSION['ID']; ?>" readonly>

                    <label for="license">License No</label>
                    <input type="text" id="license" name="license" value="<?php echo $_SESSION['lisence']; ?>" readonly>

                    <label for="contact">Contact No</label>
                    <input type="text" id="contact" name="contact" value="<?php echo $_SESSION['contact']; ?>">

                    <label for="profile-pic">Upload a profile picture</label>
                    <input type="file" id="profile-pic" name="image">

                    <button type="submit" class="save-changes-btn" name="submit" onclick="alert('successfully changed')">Save Changes</button>
                </form>
            </div>

            
            <div class="package-info">
                <h2>Activated Package</h2>
                <div class="package-img">
                    <img src="images\img1.jpg" alt="Activated Package">
                </div>
                <a href="package.php" class="more-info-btn">More Info</a><br><br><hr><br>

                <h2>vehicles</h2>
                <?php
                    $sql = "SELECT * FROM vehicle WHERE email= '{$_SESSION['email']}' ";

                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0)
                    {

                    
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                        <tr>
                        <td><?php echo $row['vehicleNo'];?><br><br></td>
                    </tr>
                        <?php
                    }
                    }
                ?>
                <br>
                <a href="vehicleRegistration.php" class="more-info-btn">Add</a><br><br>
            </div>
            
        </div>
    </div>

    
</body>
</html>

<?php
    include("footer.php");
?>
