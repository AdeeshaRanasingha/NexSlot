<?php
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
    $sql = "DELETE FROM users WHERE userid='$id'";
    $result = mysqli_query($conn, $sql);

    if ($query_run) {
        $_SESSION['success'] = "Admin account deleted";
        header('Location: adminUsers.php');
    } else {
        $_SESSION['status'] = "Cannot delete the admin account";
        header('Location: adminUsers.php');
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
                <th>FLOOR</th>
                <th>SLOT</th>
                <th>DATE</th>
                <th>START TIME</th>
                <th>END TIME</th>
            </tr>
        </thead> 
        <tbody>
        <?php
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
                        
                        <a class='button' id='btn2' href='adminUsers.php?delete_id=<?php echo $row['userId']; ?>' onclick="return confirm('Are you sure you want to delete this admin?');">Delete</a>
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



