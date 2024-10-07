<?php
    include("adminSidebar.php");
    require_once 'database.php';
    

    // Check if in edit mode
    if (isset($_GET['edit_id'])) {
        $messageid = $_GET['edit_id'];
        
        // Fetch the admin details based on the edit_id
        $sql = "SELECT * FROM feedback WHERE messageID = '$messageid'";
        $result = mysqli_query($conn, $sql);
        
        // Fetch the row
        if ($row = mysqli_fetch_assoc($result)) {

            $message = $row['message'];
            $reply = $row['reply'];

        }
    }

    // Handle form submission
    if (isset($_POST['update'])) {
        $message = $_POST['message'];
        $reply = $_POST['reply'];
    
        // Update query
        $sql = "UPDATE feedback SET message = '$message', reply = '$reply' WHERE messageID = '$messageid'";
        
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Reply successful!'); </script>";
            header('Location: adminMessage.php'); 
        } 
        else {
            header('Location: adminMessage.php?erroesomething-went-wrong'); 
        }
    }

    // Delete admin data
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM feedback WHERE messageID='$id'";
    $result = mysqli_query($conn, $sql);

    if ($query_run) {
        $_SESSION['success'] = "Admin account deleted";
        header('Location: adminMessage.php');
    } else {
        $_SESSION['status'] = "Cannot delete the admin account";
        header('Location: adminMessage.php');
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
    <h2>Edit Message</h2>
    <form method="post" action="">
        <div class="inputs">
            <label for="admin_name">message</label><br>
            <input type="text" name="message" id="name" value="<?php echo isset($message) ? $message : '';?>" readonly><br><br>

            <label for="admin_username">Enter reply</label><br>
            <input type="text" name="reply" id="username" value="<?php echo isset($reply) ? $reply : ''; ?>" required><br><br>

                <button type="submit" name="update" class="button" id="btn">Post Reply</button>
            
        </div>
    </form>
</div>



    <!-- Admin Table -->
    <div class="container" id="table-container">
    <h2>List of Messages</h2>
    <br>
    <!-- Fetch and Display List of Admins -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>EMAIL</th>
                <th>NAME</th>
                <th>MESSAGE</th>
                <th>REPLY</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM feedback";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <tr>
                    <td><?php echo $row['messageID']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td><?php echo $row['reply']; ?></td>
                    <td>
                        <a class='button' id='btn1' href='adminMessage.php?edit_id=<?php echo $row['messageID']; ?>'>Reply</a>
                        <a class='button' id='btn2' href='adminMessage.php?delete_id=<?php echo $row['messageID']; ?>' onclick="return confirm('Are you sure you want to delete this admin?');">Delete</a>
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



