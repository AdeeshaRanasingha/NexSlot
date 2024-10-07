<?php
//verifying whether the user has entered credentials or not
session_start();
if (!isset($_SESSION["submit"])) {
  include("loginHeader.php");
} else {
  include("header.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NexSlot Reservation</title>

  <!-- Link to external CSS file -->
  <link rel="stylesheet" href="style\basic.css" />


</head>

<body>
  <!-- Page heading -->
  <span id="span1">
    <h1>Fill your reservation details</h1>
  </span>

  <!-- Form for registration -->
  <form method="post" action="basicINC.php" enctype="multipart/form-data" class="form">
    <!-- Username input -->
    <div class="group">
      <label for="username"><b>name : </b></label>
      <input name="username" type="text" id="username" class="input" value="<?php echo $_SESSION['name']; ?>"
        minlength="6" maxlength="15" required />
    </div>

    <!-- NIC input -->
    <div class="group">
      <label for="NIC"><b>NIC :</b></label>
      <input name="nic" type="text" id="NIC" class="input" value="<?php echo $_SESSION['ID']; ?>" minlength="10"
        maxlength="12" required />
    </div>

    <!-- License number input -->
    <div class="group">
      <label for="license"><b>License Number</b></label>
      <input name="license_number" type="text" id="license" class="input" value="<?php echo $_SESSION['lisence']; ?>"
        required />
    </div>

    <!-- Select vehicle dropdown -->
    <label for="vehicle"><b>Select Vehicle</b></label>
    <select name="vehicle" id="vehicle" class="input">
      <option value="">Select a Vehicle</option>
      <?php

      require_once 'database.php';


      $sql = "SELECT vehicleID, brand, model, vehicleNo FROM vehicle where email= '{$_SESSION['email']}'";
      $query_run = mysqli_query($conn, $sql);
      ?>

      <?php

      if (mysqli_num_rows($query_run) > 0) {

        while ($row = mysqli_fetch_assoc($query_run)) {
          echo "<option value='" . $row['vehicleNo'] . "'>" . $row['vehicleNo'] . "</option>";
        }
      } else {
        echo "<option value=''>No vehicles available</option>";
      }
      ?>

    </select>

    <!-- Button to add a new vehicle -->
    <button type="button" class="button" onclick="location.href = 'vehicleRegistration.php';">Add new vehicles</button>

    <!-- Date input for selecting reservation date -->
    <br /><br />
    <label for="date"><b>Select Date</b></label>
    <input name="date" type="date" class="input" required />

    <!-- Time input for selecting the starting time of the reservation -->
    <label for="start_time">Starting Time</label>
    <input name="start_time" type="time" class="input" />

    <!-- Time input for selecting the ending time of the reservation -->
    <label for="end_time">Ending Time</label>
    <input name="end_time" type="time" class="input" />

    <input type="hidden" name="floor" id="selectedFloor">
    <input type="hidden" name="slot" id="selectedSlot">

    <!-- Reset and submit buttons for the form -->
    <input type="reset" class="button" />
    <input type="submit" class="button" />

    <!-- View Reservations button -->
    <a href="viewReservationBasic.php" class="button">View Reservations</a>
  </form>

  <script src="js\basic.js"></script>
  <script src="js/basic_res.js"></script>
</body>

<br><br>

<footer>
  <?php include 'footer.php'; ?>
</footer>

</html>