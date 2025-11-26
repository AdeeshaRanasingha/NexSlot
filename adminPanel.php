<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style\adminPanel.css" />

  <!--link font awesome icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Admin Panel</h2>
    <ul>
      <li>
        <a href="adminPanel.php"><i class="fas fa-home"></i> Admin Home</a>
      </li>

      <li>
        <a href="adminUsers.php"><i class="fas fa-users"></i> Users</a>
      </li>
      <li>
        <a href="adminVehicle.php"><i class="fas fa-car"></i> Vehicle</a>
      </li>
      <li>
        <a href="adminReservation.php"><i class="fas fa-calendar-check"></i> Reservation</a>
      </li>
      <li>
        <a href="csrRegistration.php"><i class="fas fa-briefcase"></i> Employees</a>
      </li>
      <li>
        <a href="adminPackage.php"><i class="fas fa-cogs"></i> package</a>
      </li>
      <li>
        <a href="adminMessage.php"><i class="fas fa-cogs"></i> Message</a>
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
      <i class="fas fa-users"></i><a href="adminUsers.php"><p>Users</p></a>
      
    </div>
    <div class="dashboard-box">
      <i class="fas fa-car"></i><a href="adminVehicle.php"><p>Vehicles</p></a>
      
    </div>
    <div class="dashboard-box">
      <i class="fas fa-calendar-check"></i><a href="adminReservation.php"><p>Reservations</p></a>
      
    </div>
    <div class="dashboard-box">
      <a href="csrRegistration.php"><i class="fas fa-briefcase"></i></a><a href="csrRegistration.php"><p>Employees</p></a>
      
    </div>
    <div class="dashboard-box">
      <i class="fas fa-credit-card"></i><a href="adminPackage.php"><p>package</p></a>
      
    </div>

    
  </div>
  </div>
</body>

</html>