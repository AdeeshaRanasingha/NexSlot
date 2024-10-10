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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Registration</title>
    <link rel="stylesheet" href="style/vehicleRegistration.css">
    
</head>

<body>


    <div class="main">
        <section class="registration-section">
            <h1>Vehicle Registration</h1>

            <div class="registration-form">
                <img src="images/car.jpeg" alt="Vehicle Image" />


                <form method="POST" action="">
                    <div class="form-group">
                        <label>Vehicle Type</label>
                        <select id="vehicleType" name="type" required>
                            <option value="">Select...</option>
                            <option value="bike">Bike</option>
                            <option value="car">Car</option>
                            <option value="van">Van</option>
                            <option value="wheel">Three wheeler</option>
                            <option value="truck">Truck</option>
                            <option value="suv">SUV</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Vehicle Brand</label>
                        <select id="vehicleBrand" name="brand">
                            <option value="">Select...</option>
                            <option value="toyota">Toyota</option>
                            <option value="honda">Honda</option>
                            <option value="suzuki">Suzuki</option>
                        </select>
                    </div>

                    
                        <label>Vehicle Model</label>
                        <input type="text" placeholder="Model" name="model">
                    

                    
                        <label for="vehicleNumber">Vehicle Number</label>
                        <input type="text" id="vehicleNumber" placeholder="Vehicle number" name="vehicleNumber"
                            required>
                    
                    <input type="date" name="date" id="date">

                    <button type="submit" name="submit">Register</button>

                </form>
                <br><button type="button" class="btn" onclick="window.location.href = 'editVehicle.php'">Edit
                    vehicle</button>
            </div>
        </section>
    </div>

    <script src="js\vehicle.js"></script>
</body>

</html>

<?php
include("footer.php");
?>

<?php
if (isset($_POST["submit"])) {
    $type = $_POST["type"];
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $vehicleNumber = $_POST["vehicleNumber"];
    $date=$_POST["date"];

    require_once 'database.php';

    //insert to vehicle table
    $sql = "INSERT INTO vehicle (email, type, brand, model, vehicleNo , date) VALUES ('{$_SESSION['email']}', '{$type}', '{$brand}', '{$model}', '{$vehicleNumber}' , '{$date}')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>
                showSuccessMessage();
            </script>";
            header('location:editVehicle.php');
    } else {
        echo "<script>alert('Error while registering vehicle.');</script>";
    }
}

?>