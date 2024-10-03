<?php
    include("adminSidebar.php");
    require_once 'database.php';
    

    // Check if in edit mode
    if (isset($_GET['edit_id'])) {
        $userid = $_GET['edit_id'];
        
        // Fetch the admin details based on the edit_id
        $sql = "SELECT * FROM users WHERE userId = '$userid'";
        $result = mysqli_query($conn, $sql);
        
        // Fetch the row
        if ($row = mysqli_fetch_assoc($result)) {

            $name = $row['name'];
            $contact = $row['contactNo'];
            $vehicle = $row['vehicleNo'];
            $package = $row['package'];

        }
    }

    // Handle form submission
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $vehicle = $_POST['vehicle'];
        $contact = $_POST['contact'];
        $package = $_POST['package'];
        

        // Update query
        $sql = "UPDATE users SET name = '$name', vehicleNo = '$vehicle' , contactNo = '$contact' , package = '$package' WHERE userId = '$userid'";
        
        if (mysqli_query($conn, $sql)) {
            header('Location: adminUsers.php'); 
        } 
        else {
            header('Location: adminUsers.php?erroesomething-went-wrong'); 
        }
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

<!-- Form to Add or Edit Admin -->
<div class="container" id="form-container">
    <h2>Edit Users</h2>
    <form method="post" action="">
        <div class="inputs">
            <label for="admin_name">Enter Name</label><br>
            <input type="text" name="name" id="name" value="<?php echo isset($name) ? $name : '';?>" required><br><br>

            <label for="admin_username">Enter vehicle No</label><br>
            <input type="text" name="vehicle" id="username" value="<?php echo isset($vehicle) ? $vehicle : ''; ?>" required><br><br>

            <label for="admin_username">Enter contact no</label><br>
            <input type="text" name="contact" id="username" value="<?php echo isset($contact) ? $contact : ''; ?>" required><br><br>

            <label for="admin_username">Enter package</label><br>
            <input type="text" name="package" id="username" value="<?php echo isset($package) ? $package : ''; ?>" required><br><br>
            

                <button type="submit" name="update" class="button" id="btn">Update Admin</button>
            
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
                <th>NAME</th>
                <th>EMAIL</th>
                <th>VEHICLE NO</th>
                <th>NIC</th>
                <th>CONTACT</th>
                <th>PACKAGE</th>
                <th>ACTIONS</th>
            </tr>
        </thead> 
        <tbody>
        <?php
        $query = "SELECT * FROM users";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <tr>
                    <td><?php echo $row['userId']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['vehicleNo']; ?></td>
                    <td><?php echo $row['idNo']; ?></td>
                    <td><?php echo $row['contactNo']; ?></td>
                    <td><?php echo $row['package']; ?></td>
                    <td>
                        <a class='button' id='btn1' href='adminUsers.php?edit_id=<?php echo $row['userId']; ?>'>Edit</a>
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

</body>
</html>



