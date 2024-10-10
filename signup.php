<?php
    //nclude("header.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signup.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="all">

    <img src="images\b.jpg" alt="Profile Picture" class="picture">
    <div class="container">
        <div class="heading">
            Sign Up
        </div>
        
        <div class="form_fill">
            <form action="signupINC.php" method ="post">

            
            <input type="text" id="name" name="name" placeholder="name" required><br><br>

            
            <input type="email" id="email" name="email" placeholder="E-Mail" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required><br><br>

            
            <input type="password" id="password" name="password" placeholder="Password"  required>
            <div class="pas">Minimum of 8 characters</div><br><br>
            
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password"  required onchange="confirmPassword()"><br><br>
            
            

            
            <input type="text" id="vehicle" name="vehicle" placeholder="Vehicle no."  required><br><br>

            
            <input type="text" id="ID" name="ID" placeholder="ID no."  maxlength="13" required ><br><br>

            
            <input type="text" id="licence" name="licence" placeholder="Licence no." maxlength="10" required><br><br>

            
            <input type="number" id="contact" name="contact" placeholder="Contact no." maxlength="10" required><br><br>

            <button type="submit" class="signup_btn" name="submit" onsubmit="validateForm()">Sign Up</button><br><br>

            <p>have an account?<a href="login.php"> Sign In</a></p>
            </form>
        </div>
    </div>
</div>
<script src="js/signup.js"></script>
</body>
</html>
<?php
    include("footer.php")
?>