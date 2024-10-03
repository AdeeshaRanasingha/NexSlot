<?php
    //nclude("header.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/adminlogin.css">
    <title>Sign in</title>
</head>
<body>
    <div class="all">

    
    <div class="container">
        <div class="heading">
            Admin login
        </div>
        
        <div class="form_fill">
            <form action="adminloginINC.php" method ="post">

            
            <input type="email" id="email" name="email" placeholder="e-mail" required><br><br>

            
            <input type="password" id="password" name="password" placeholder="Password" required><br><br>
            


            <button type="submit" class="signup_btn" name="submit">Sign In</button><br><br>

           
            </form>
        </div>
    </div>
</div>

</body>
</html>
<?php
    include("footer.php")
?>