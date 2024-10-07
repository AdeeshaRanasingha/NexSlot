<?php
//verifying whether the user has entered credentials or not
    require_once 'database.php';
    
    session_start();
    if(!isset($_SESSION["submit"])){
        include("loginHeader.php");
    }
    else{
        include("header.php");
    }


    // Delete admin data
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM reservation WHERE reservationID='$id'";
    $result = mysqli_query($conn, $sql);

    if ($query_run) {
       
        header('Location: viewReservationBasic.php');
    } else {
       
        header('Location: viewReservationBasic.php?error-not-working');
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

    <!-- reservation Table -->
    <div class="container" id="table-container">
    <h2>List of reservations</h2>
    <br>
    <!-- Fetch and Display List of reservations -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>EMAIL</th>
                <th>USER NAME</th>
                <th>VEHICLE NO</th>
                <th>NIC</th>
                <th>FLOOR</th>
                <th>SLOT</th>
                <th>DATE</th>
                <th>START TIME</th>
                <th>END TIME</th>
            </tr>
        </thead> 
        <tbody>
        <?php
        //displaying details of reservations of specific user
        $query = "SELECT * FROM reservation WHERE email= '{$_SESSION['email']}'";
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
                    <td><?php echo $row['floor']; ?></td>
                    <td><?php echo $row['slot']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['start_time']; ?></td>
                    <td><?php echo $row['end_time']; ?></td>
                    <td>
                        
                        <a class='button' id='btn2' href='viewReservationBasic.php?delete_id=<?php echo $row['reservationID']; ?>' onclick="return confirm('Are you sure you want to delete?');">Delete</a>
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



