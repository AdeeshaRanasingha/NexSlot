
<?php
    include("header.php");
    if(!isset($_SESSION["submit"])){
        header('location: login.php?error=login-first');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Premium Slot Reservation
        </title>
        <link rel="stylesheet" href="style\primium.css">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- Google Fonts link for using custom fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Coming+Soon&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    </head>
    <body>
        <section class="reservation">
            <br>
            <h1>Premium Packge</h1><br><br><br>
            <div class="border-line">
            <div class="border-grid">
                <h2>Select your slot</h2><br><br>
                <div class="slot-grid">
                    <table>
                        <thead>
                            <tr>
                                <td class="floor">FLOOR</td>
                                <td class="slot">SLOT</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <div class="floor-row">
                                    <td><div class="floor-number">1</div></td>
                                    <td><div class="floor-slots">
                                    <button onclick="selectSlot(1, 'A')">A</button><button onclick="selectSlot(1, 'B')">B</button><button onclick="selectSlot(1, 'C')">C</button>
                                    <button onclick="selectSlot(1, 'D')">D</button><button onclick="selectSlot(1, 'E')">E</button><button onclick="selectSlot(1, 'F')">F</button>
                                    <button onclick="selectSlot(1, 'G')">G</button><button onclick="selectSlot(1, 'H')">H</button><button onclick="selectSlot(1, 'I')">I</button>
                                    <button onclick="selectSlot(1, 'J')">J</button><button onclick="selectSlot(1, 'K')">K</button>
                                    </div></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="floor-row">
                                    <td><div class="floor-number">2</div></td>
                                    <td><div class="floor-slots">
                                    <button onclick="selectSlot(2, 'A')">A</button><button onclick="selectSlot(2, 'B')">B</button><button onclick="selectSlot(2, 'C')">C</button>
                                    <button onclick="selectSlot(2, 'D')">D</button><button onclick="selectSlot(2, 'E')">E</button><button onclick="selectSlot(2, 'F')">F</button>
                                    <button onclick="selectSlot(2, 'G')">G</button><button onclick="selectSlot(2, 'H')">H</button><button onclick="selectSlot(2, 'I')">I</button>
                                    <button onclick="selectSlot(2, 'J')">J</button><button onclick="selectSlot(2, 'K')">K</button>
                                        </div></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="floor-row">
                                    <td><div class="floor-number">3</div></td>
                                    <td><div class="floor-slots">
                                    <button onclick="selectSlot(3, 'A')">A</button><button onclick="selectSlot(3, 'B')">B</button><button onclick="selectSlot(3, 'C')">C</button>
                                    <button onclick="selectSlot(3, 'D')">D</button><button onclick="selectSlot(3, 'E')">E</button><button onclick="selectSlot(3, 'F')">F</button>
                                    <button onclick="selectSlot(3, 'G')">G</button><button onclick="selectSlot(3, 'H')">H</button><button onclick="selectSlot(3, 'I')">I</button>
                                    <button onclick="selectSlot(3, 'J')">J</button><button onclick="selectSlot(3, 'K')">K</button>
                                        </div></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="floor-row">
                                    <td><div class="floor-number">4</div></td>
                                    <td><div class="floor-slots">
                                        <button>A</button><button>B</button><button>C</button>
                                        <button>D</button><button>E</button><button>F</button>
                                        <button>G</button><button>H</button><button>I</button>
                                        <button>J</button><button>K</button>
                                        </div></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="floor-row">
                                    <td><div class="floor-number">5</div></td>
                                    <td><div class="floor-slots">
                                        <button>A</button><button>B</button><button>C</button>
                                        <button>D</button><button>E</button><button>F</button>
                                        <button>G</button><button>H</button><button>I</button>
                                        <button>J</button><button>K</button>
                                        </div></td>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br><br>
            <p>Reservation Details</p><br><br>
            <form action="primiumINC.php" method="post">
            <div class="reservationdetails">
                <label>Name : </label><br>
                <input name="name" type="text" value="<?php echo $_SESSION['name']; ?>"><br><br>
                <label>NIC No : </label><br>
                <input name="nic" type="text" value="<?php echo $_SESSION['ID']; ?>"><br><br>
                <label>Licence No : </label><br>
                <input name="licence" type="text" value="<?php echo $_SESSION['lisence']; ?>"><br><br>
                <label>Select vehicle : </label><br>
                <select name="vehicle" >
                    <option>Select...</option>
                    <option name="vehicle">1</option>
                    <option name="vehicle">2</option>
                    <option name="vehicle">3</option>
                </select>
                <button type="button" id="add-vehicle" onclick="location.href = 'vehicleRegistration.php';" >Add New Vehicle</button><br><br>
                <label>Select Date : </label><br>
                <input name="date" type="date"><br><br>

                <input type="hidden" name="floor" id="selectedFloor">
                <input type="hidden" name="slot" id="selectedSlot">
                
                <button type="submit" class="submit-btn" name="submit">Submit</button><br>
                
            
            </form>
            </div>
            <button type="submit" class="submit-btn"  onclick="location.href = 'viewReservationPremium.php';">View Reservation</button><br>
        </section>
    </div>
    <SCRIPT src="js\primium.js"></SCRIPT>
    </body>
</html>
<?php
    include("footer.php");
?>

