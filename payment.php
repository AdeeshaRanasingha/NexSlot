<?php
    session_start();
    if(!isset($_SESSION["submit"])){
        include("loginHeader.php");
    }
    else{
        include("header.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="style\payment.css">
</head>
<body>

    <main>
        <section class="payment-section">
            <h1>Payment Details</h1>

            <div class="payment-form-container">
                <form action="#" method="POST" class="payment-form">

                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" id="amount" name="amount" placeholder="XXX XXX XXX" readonly>
                    </div>

                    <div class="form-group">
                        <label for="payment-option">Payment Option</label>
                        <select id="payment-option" name="payment_option">
                            <option value="" disabled selected>Select...</option>
                            <option value="credit-card">Credit Card</option>
                            <option value="paypal">PayPal</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Payment Method</label>
                        <div class="payment-method-icons">
                            <img src="images\visa.jpeg" alt="Visa">
                            <img src="images\mastercard.jpeg" alt="MasterCard">
                            <img src="images\amex.jpeg" alt="AmEx">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="card-number">Card Number</label>
                        <input type="text" id="card-number" name="card_number" placeholder="Enter card number">
                
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name">
        
                        <label for="expiry-date">Expiry Date</label>
                        <input type="text" id="expiry-date" name="expiry_date" placeholder="MM/YY">

                        <label for="cvv-code">CVV Code</label>
                        <input type="text" id="cvv-code" name="cvv_code" placeholder="CVV">
                    </div>
<br><br>
                    <div class="button-group">
                    <form action="" method="POST">
                        <button type="button" class="cancel-button">Cancel</button>
                        <button type="submit" class="pay-button" name="pay">Pay</button>
                    </form>
                    </div>

                    <div class="file-upload">
                        <p>or</p>
                        <br>
                        <label for="file-upload" class="file-upload-button">Choose file</label>
                        <input type="file" id="file-upload" name="file_upload">
                    </div>
                </form>
            </div>
        </section>
    </main>

</body>
</html>
<?php
    include("footer.php");
?>
<?php
    if(isset($_POST["premium"]) and isset($_POST[""])){
        
            $sql = "UPDATE users SET package = 'premium' WHERE email = '{$_SESSION['email']}'";
            $result = mysqli_query($conn , $sql);
            header('location:useraccount.php');
        
    }
?>