<?php
    include("adminSidebar.php");
    require_once 'database.php';
    
    //package 1
    // Check if in edit mode
    if (isset($_GET['edit_id1'])) {
        $id = $_GET['edit_id1'];
        
        // Fetch the admin details based on the edit_id package 1
        $sql = "SELECT * FROM package1 WHERE ID = '$id'";
        $result = mysqli_query($conn, $sql);
        
        // Fetch the row
        if ($row = mysqli_fetch_assoc($result)) {

            $id = $row['ID'];
            $features = $row['Features'];

        }
    }

    // Handle form submission package 1
    if (isset($_POST['update1'])) {
        $features = $_POST['features'];
        

        // Update query
        $sql = "UPDATE package1 SET Features = '$features' WHERE ID = '$id'";
        
        if (mysqli_query($conn, $sql)) {
            header('Location: adminPackage.php'); 
        } 
        else {
            header('Location: adminPackage.php?erroesomething-went-wrong'); 
        }
    }

    // Delete package 1
if (isset($_GET['delete_id1'])) {
    $id = $_GET['delete_id1'];
    $sql = "DELETE FROM package1 WHERE ID='$id'";
    $result = mysqli_query($conn, $sql);

    if ($query_run) {
        $_SESSION['success'] = "Package  deleted";
        header('Location: adminPackage.php');
    } else {
        $_SESSION['status'] = "Cannot delete the package";
        header('Location: adminPackage.php');
}
}


// Adding admin data
if (isset($_POST['add1'])) {
    $id = $_POST['id'];
    $features = $_POST['features'];
    

    $query = "INSERT INTO package1(id, Features) VALUES ('$id', '$features')";
    $query_run = mysqli_query($conn, $query);
   

    if ($query_run) {
        $_SESSION['success'] = "package added";
        header('Location: adminPackage.php');
    } else {
        $_SESSION['status'] = "Cannot add the package";
        header('Location: adminPackage.php');
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

<!-- Form to Add or Edit package 1 -->
<div class="container" id="form-container">
    <h2>Edit Package 1</h2>
    <form method="post" action="">
        <div class="inputs">
            <label for="admin_name">Enter id</label><br>
            <input type="text" name="id" id="id" value="<?php echo isset($id) ? $id : '';?>" readonly><br><br>

            <label for="admin_name">Enter features</label><br>
            <input type="text" name="features" id="name" value="<?php echo isset($features) ? $features : '';?>" required><br><br>
            

            <?php if (isset($id)) { ?>
                <button type="submit" name="update1" class="button" id="btn">Update</button>
            <?php } else { ?>
                <button type="submit" name="add1" class="button" id="btn">Add New detail</button>
            <?php } ?>

            
        </div>
    </form>
</div>



    <!-- Package 1 -->
    <div class="container" id="table-container">
    <h2>Package 1</h2>
    <br>
    <!-- Fetch and Display List of package 1 -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>FEATURES</th>
            </tr>
        </thead> 
        <tbody>
        <?php
        $query = "SELECT * FROM package1";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Features']; ?></td>
                    <td>
                        <a class='button' id='btn1' href='adminPackage.php?edit_id1=<?php echo $row['ID']; ?>'>Edit</a>
                        <a class='button' id='btn2' href='adminPackage.php?delete_id1=<?php echo $row['ID']; ?>' onclick="return confirm('Are you sure you want to delete this row?');">Delete</a>
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


<?php
    
    //package 2
    // Check if in edit mode
    if (isset($_GET['edit_id2'])) {
        $id = $_GET['edit_id2'];
        
        // Fetch the admin details based on the edit_id package 1
        $sql = "SELECT * FROM package2 WHERE ID = '$id'";
        $result = mysqli_query($conn, $sql);
        
        // Fetch the row
        if ($row = mysqli_fetch_assoc($result)) {

            $id = $row['ID'];
            $features = $row['Features'];

        }
    }

    // Handle form submission package 2
    if (isset($_POST['update2'])) {
        $features = $_POST['features'];
        

        // Update query
        $sql = "UPDATE package2 SET Features = '$features' WHERE ID = '$id'";
        
        if (mysqli_query($conn, $sql)) {
            header('Location: adminPackage.php'); 
        } 
        else {
            header('Location: adminPackage.php?erroesomething-went-wrong'); 
        }
    }

    // Delete package 2
if (isset($_GET['delete_id2'])) {
    $id = $_GET['delete_id2'];
    $sql = "DELETE FROM package2 WHERE ID='$id'";
    $result = mysqli_query($conn, $sql);

    if ($query_run) {
        $_SESSION['success'] = "Package deleted";
        header('Location: adminPackage.php');
    } else {
        $_SESSION['status'] = "Cannot delete the Package";
        header('Location: adminPackage.php');
}
}

// Adding admin data
if (isset($_POST['add2'])) {
    $id = $_POST['id'];
    $features = $_POST['features'];
    

    $query = "INSERT INTO package2(id, Features) VALUES ('$id', '$features')";
    $query_run = mysqli_query($conn, $query);
   

    if ($query_run) {
        header('Location: adminPackage.php');
    } else {
        header('Location: adminPackage.php');
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

<br><br>
<!-- Form to Add or Edit package 2 -->
<div class="container" id="form-container">
    <h2>Edit Package 1</h2>
    <form method="post" action="">
        <div class="inputs">

        <label for="admin_name">Enter id</label><br>
            <input type="text" name="id" id="id" value="<?php echo isset($id) ? $id : '';?>" readonly><br><br>

            <label for="admin_name">Enter features</label><br>
            <input type="text" name="features" id="name" value="<?php echo isset($features) ? $features : '';?>" required><br><br>
            

                <?php if (isset($id)) { ?>
                <button type="submit" name="update2" class="button" id="btn">Update</button>
            <?php } else { ?>
                <button type="submit" name="add2" class="button" id="btn">Add New detail</button>
            <?php } ?>
            
        </div>
    </form>
</div>



    <!-- Package 2 -->
    <div class="container" id="table-container">
    <h2>Package 1</h2>
    <br>
    <!-- Fetch and Display List of package 2 -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>FEATURES</th>
            </tr>
        </thead> 
        <tbody>
        <?php
        $query = "SELECT * FROM package2";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Features']; ?></td>
                    <td>
                        <a class='button' id='btn1' href='adminPackage.php?edit_id2=<?php echo $row['ID']; ?>'>Edit</a>
                        <a class='button' id='btn2' href='adminPackage.php?delete_id2=<?php echo $row['ID']; ?>' onclick="return confirm('Are you sure you want to delete this row?');">Delete</a>
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






