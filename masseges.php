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
    <title>Testimonials and Feedback</title>
    <link rel="stylesheet" href="style/masseges.css">
</head>
<body>
    <section class="testimonials">
        <h2>What Our Clients Say</h2>
        <div class="testimonial-container">
            <div class="testimonial">
                <div class="avatar"><img src="images/photo1.jpg" width="100px" height="100px"> </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus."</p>
                <p class="user-name">User Name</p>
            </div>
            <div class="testimonial">
                <div class="avatar"><img src="images/photo2.jpg" width="100px" height="100px"> </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus."</p>
                <p class="user-name">User Name</p>
            </div>
            <div class="testimonial">
                <div class="avatar"><img src="images/photo3.jpg" width="100px" height="100px"> </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus."</p>
                <p class="user-name">User Name</p>
            </div>
        </div>
    </section>

    <section class="feedback">
        <h1>Feedback</h1>
        <form action="" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="e.g. Name">

            <label for="email">Reply method</label>
            <input type="email" id="email" name="email" placeholder="mail@example.com">
            
            <label for="feedback">Add your feedback</label>
            <textarea id="feedback" name="feedback" placeholder="Example Text"></textarea>
            <button type="submit" value="submit" name="submit">Submit</button>
        </form>
    </section>
</body>
</html>
<?php
    include("footer.php");
?>

<?php
if(isset($_POST["submit"])){

  require 'database.php';

  $email = $_POST["email"];
  $name = $_POST["name"];
  $message = $_POST["feedback"];
  
  // Insert the feedback into the database
  $sql = "INSERT INTO feedback (email, name, message) VALUES ('{$email}', '{$name}', '{$message}')";

  $result = mysqli_query($conn, $sql);

  if($result){
    echo "Feedback submitted successfully!";
    // Optionally redirect after successful submission
    // header('location: success_page.php');
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}
?>
