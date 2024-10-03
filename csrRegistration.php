<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In - Customer Support</title>

    <?php include 'adminSidebar.php'; ?>

    <br><br>

    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="style\csrRegistration.css" />
  </head>
  <body>
    
    <!-- Sign-In Form -->
    <form action="signup_process.php" method="POST" class="form">
      <h1>Welcome! CSR SIGN IN</h1>

      <div class="Content">
        <!-- Left Section -->
        <div class="LeftSide">
            <img id="img1" src="images\CSR_img\profile.png" alt="CSR Image" />
        </div>

        <!-- Right Section -->
        <div class="RightSide">
          <label for="name">Name : </label>

          <input
            class="input"
            class="input"
            type="text"
            name="name"
            placeholder="Enter your name here..."
            required
          />

          <!-- email input -->
          <label for="email">Email : </label>

          <input
            class="input"
            class="input"
            type="email"
            name="email"
            placeholder="Enter your email here..."
            required
          />

          <!-- NIC input -->
          <label for="NIC">NIC : </label>
          <input
            class="input"
            type="text"
            name="NIC"
            placeholder="Enter your NIC number here..."
            required
          />
          <!-- Contact Number input -->
          <label for="contact_number">Contact Number : </label>

          <input
            class="input"
            type="tel"
            name="contact_number"
            placeholder="Enter your Contact number here..."
            required
          />

         
          <!-- Password input -->
          <label for="password">Password : </label>

          <input
            class="input"
            type="password"
            name="password"
            placeholder="Enter your CSR Password here..."
            required
          />

          <!-- Password confirmation input -->
          <label for="confirmPassword">Confirmation Password : </label>

          <input
            class="input"
            type="password"
            name="confirmPassword"
            placeholder="Check your Mail box & Enter Confirmation Password here.."
            required
          />
          <input class="button" type="submit" value="Sign In" />
        </div>
      </div>
    </form>
      <br><br>
    
  </body>
</html>
