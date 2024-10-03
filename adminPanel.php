<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style\adminPanel.css" />

    <!--link font awesome icons-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <!-- Sidebar -->
    <div class="sidebar">
      <h2>Admin Panel</h2>
      <ul>
        <li>
          <a href="adminUsers.php"><i class="fas fa-users"></i> Users</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-car"></i> Vehicle</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-calendar-check"></i> Reservation</a>
        </li>
        <li>
          <a href="csrRegistration.php"><i class="fas fa-briefcase"></i> Employees</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-credit-card"></i> Payment</a>
        </li>
        <li>
          <a href="adminPackage.php"><i class="fas fa-cogs"></i> package</a>
        </li>
      </ul>
    </div>

      <header>
        <div class="search-container">
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Search..." />
        </div>
      </header>

      <br><br>

      <h1>Admin Dashboard</h1>

      <br><br>

      <!-- Dashboard Boxes -->
      <div class="dashboard-container">
        <!-- Existing Dashboard Boxes -->
        <div class="dashboard-box">
          <i class="fas fa-users"></i>
          <p>Users</p>
        </div>
        <div class="dashboard-box">
          <i class="fas fa-car"></i>
          <p>Vehicles</p>
        </div>
        <div class="dashboard-box">
          <i class="fas fa-calendar-check"></i>
          <p>Reservations</p>
        </div>
        <div class="dashboard-box">
        <a href="csrRegistration.php"><i class="fas fa-briefcase"></i></a>
          <p>Employees</p>
        </div>
        <div class="dashboard-box">
          <i class="fas fa-credit-card"></i>
          <p>Payments</p>
        </div>

        <!-- Add Box Button -->
        <div class="dashboard-box add-box" id="addBoxButton">
          <i class="fas fa-plus-circle"></i>
          <p>Add Shourtcut</p>
        </div>
      </div>
    </div>
  </body>
</html>
