<?php
    //verifying whether the user has entered credentials or not
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
        $vehicleid = $_GET['edit_id'];
        
        // Fetch the admin details based on the edit_id
        $sql = "SELECT * FROM vehicle WHERE vehicleID = '$vehicleid'";
        $result = mysqli_query($conn, $sql);
        
        // Fetch the row
        if ($row = mysqli_fetch_assoc($result)) {

            $email = $row['email'];
            $type = $row['type'];
            $brand = $row['brand'];
            $model = $row['model'];
            $vehicleNo = $row['vehicleNo'];
        }
    }

    // Handle form submission
    if (isset($_POST['update'])) {
        $type = $_POST['type'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $vehicleNo = $_POST['vehicleNo'];
    
        // Update query
        $sql = "UPDATE vehicle SET type = '$type', brand = '$brand' , model = '$model' , vehicleNo = '$vehicleNo' WHERE vehicleID = '$vehicleid'";
        
        if (mysqli_query($conn, $sql)) {
            header('Location: editVehicle.php'); 
        } 
        else {
            header('Location: editVehicle.php?erroesomething-went-wrong'); 
        }
    }

    // Delete vehiclke data
if (isset($_GET['delete_id'])) {
    $vehicleid = $_GET['delete_id'];
    $sql = "DELETE FROM vehicle WHERE vehicleID='$vehicleid'";
    $result = mysqli_query($conn, $sql);

    if ($query_run) {
        $_SESSION['success'] = "Admin account deleted";
        header('Location: editVehicle.php');
    } else {
        $_SESSION['status'] = "Cannot delete the admin account";
        header('Location: editVehicle.php');
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

<!-- Form to Add or Edit vehicles -->
<div class="container" id="form-container">
    <h2>Edit vehicles</h2>
    <form method="post" action="">
        <div class="inputs">
            <label for="admin_name">type</label><br>
            <input type="text" name="type" id="name" value="<?php echo isset($type) ? $type : '';?>" ><br><br>

            <label for="admin_username">Enter brand</label><br>
            <input type="text" name="brand" id="username" value="<?php echo isset($brand) ? $brand : ''; ?>" required><br><br>

            <label for="admin_username">Enter model</label><br>
            <input type="text" name="model" id="username" value="<?php echo isset($model) ? $model : ''; ?>" required><br><br>

            <label for="admin_username">Enter vehicleNo</label><br>
            <input type="text" name="vehicleNo" id="username" value="<?php echo isset($vehicleNo) ? $vehicleNo : ''; ?>" required><br><br>

                <button type="submit" name="update" class="button" id="btn">Edit</button>
            
        </div>
    </form>
</div>



    <!-- Admin Table -->
    <div class="container" id="table-container">
    <h2>List of vehicles</h2>
    <br>
    <!-- Fetch and Display List of Admins -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>EMAIL</th>
                <th>TYPE</th>
                <th>BRAND</th>
                <th>MODEL</th>
                <th>VEHICLE NO</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM VEHICLE WHERE email = '{$_SESSION['email']}'";
        $query_run = mysqli_query($conn, $query);

        //display data
        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <tr>
                    <td><?php echo $row['vehicleID']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                    <td><?php echo $row['brand']; ?></td>
                    <td><?php echo $row['model']; ?></td>
                    <td><?php echo $row['vehicleNo']; ?></td>
                    <td>
                        <a class='button' id='btn1' href='editVehicle.php?edit_id=<?php echo $row['vehicleID']; ?>'>Edit</a>
                        <a class='button' id='btn2' href='editVehicle.php?delete_id=<?php echo $row['vehicleID']; ?>' onclick="return confirm('Are you sure you want to delete this admin?');">Delete</a>
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



