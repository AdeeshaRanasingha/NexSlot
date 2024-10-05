<?php
    
    session_start();
    if(!isset($_SESSION["submit"])){
        include("loginHeader.php");
    }
    else{
        include("header.php");
    }

    require_once 'database.php';
    

    // Check if in edit mode
    if (isset($_GET['edit_id'])) {
        $reservationid = $_GET['edit_id'];
        
        // Fetch the admin details based on the edit_id
        $sql = "SELECT * FROM reservation WHERE reservationID = '$reservationid'";
        $result = mysqli_query($conn, $sql);
        
        // Fetch the row
        if ($row = mysqli_fetch_assoc($result)) {

            $vehicle = $row['vehicle'];
            $start = $row['start_time'];
            $end = $row['end_time'];
            $date = $row['date'];

        }
    }

    // Handle form submission
    if (isset($_POST['update'])) {
        $vehicle = $_POST['vehicle'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $date = $_POST['date'];
        

        // Update query
        $sql = "UPDATE reservation SET vehicle = '$vehicle', start_time = '$start' , end_time = '$end' , date = '$date' WHERE reservationID = '$reservationid'";
        
        if (mysqli_query($conn, $sql)) {
            header('Location: viewReservationPremium.php'); 
        } 
        else {
            header('Location: viewReservationPremium.php?erroesomething-went-wrong'); 
        }
    }

    // Delete admin data
if (isset($_GET['delete_id'])) {
    $reservationid = $_GET['delete_id'];
    $sql = "DELETE FROM reservation WHERE reservationID='$reservationid'";
    $result = mysqli_query($conn, $sql);

    if ($query_run) {
        $_SESSION['success'] = "Admin account deleted";
        header('Location: viewReservationPremium.php');
    } else {
        $_SESSION['status'] = "Cannot delete the admin account";
        header('Location: viewReservationPremium.php');
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\adminUser.css">
    <title>Document</title>
</head>
<body>

<!-- Form to Add or Edit Admin -->
<div class="container" id="form-container">
    <h2>Edit Reservations</h2>
    <form method="post" action="">
        <div class="inputs">
            <label for="admin_name">Enter Vehicle No</label><br>
            <input type="text" name="vehicle" id="name" value="<?php echo isset($vehicle) ? $vehicle : '';?>" required><br><br>

            <label for="admin_username">Enter start time</label><br>
            <input type="time" name="start" id="username" value="<?php echo isset($start) ? $start : ''; ?>" required><br><br>

            <label for="admin_username">Enter end time</label><br>
            <input type="time" name="end" id="username" value="<?php echo isset($end) ? $end : ''; ?>" required><br><br>

            <label for="admin_username">Enter date</label><br>
            <input type="date" name="date" id="username" value="<?php echo isset($date) ? $date : ''; ?>" required><br><br>
            

                <button type="submit" name="update" class="button" id="btn">Update Reservation</button>
            
        </div>
    </form>
</div>



    <!-- Admin Table -->
    <div class="container" id="table-container">
    <h2>List of Users</h2>
    <br>
    <!-- Fetch and Display List of Admins -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>EMAIL</th>
                <th>USER NAME</th>
                <th>VEHICLE NO</th>
                <th>NIC</th>
                <th>PACKAGE</th>
                <th>FLOOR</th>
                <th>SLOT</th>
                <th>DATE</th>
                <th>START TIME</th>
                <th>END TIME</th>
            </tr>
        </thead> 
        <tbody>
        <?php
        $query = "SELECT * FROM reservation";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <tr>
                    <td><?php echo $row['reservationID']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['vehicle']; ?></td>
                    <td><?php echo $row['nic']; ?></td>
                    <td><?php echo $row['package']; ?></td>
                    <td><?php echo $row['floor']; ?></td>
                    <td><?php echo $row['slot']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['start_time']; ?></td>
                    <td><?php echo $row['end_time']; ?></td>
                    <td>
                    <a class='button' id='btn1' href='viewReservationPremium.php?edit_id=<?php echo $row['reservationID']; ?>'>Edit</a>
                        <a class='button' id='btn2' href='viewReservationPremium.php?delete_id=<?php echo $row['reservationID']; ?>' onclick="return confirm('Are you sure you want to delete this admin?');">Delete</a>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='8'>No record found</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<br><br>

</body>
</html>
<?php include 'footer.php'; ?>






