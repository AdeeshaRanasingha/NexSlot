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
<html>
<head>
    
    <link href="style\aboutus.css" rel="stylesheet"/>
    
</head>
<body>
    <!--vision mission-->
    <div class="container">
        <div class="about_us">
            <h1>About us</h1>
            <div class="underline"></div>
        </div>
        <div class="vision_mission">
            <div class="content">
                <div class="vision_mission_image">
                    <img src="images/parking1.jpeg" alt="Vision image" width="150" height="150"/>
                </div>
                <div class="text">
                    <h2>Vision</h2>
                    <p>Our vision is to be the global leader in intelligent parking systems, transforming urban mobility by creating sustainable,
                         smart cities where parking is no longer a challenge.We aim to redefine convenience and efficiency in parking management 
                         while contributing to a cleaner, more connected future.</p>
                </div>
            </div>
        </div>
        <div class="vision_mission">
            <div class="content">
                <div class="vision_mission_image">
                    <img src="images/parking2.png" alt="Mission image" width="150" height="10" style="background-color: #a3d9a5;"/>
                </div>
                <div class="text">
                    <h2>Mission</h2>
                    <p>At Nexslot, our mission is to revolutionize the parking experience by providing smart, efficient, and eco-friendly automated parking solutions. 
                        We strive to minimize parking-related stress, reduce traffic congestion, and maximize space utilization through cutting-edge 
                        technology and seamless user experience.</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="title">Meet Our Team</h2>
    
        <div class="team-container">
            <div class="team-card">
                <div class="circle"><img class="img" src="images/photo1.jpg"></div>
                <h3>Adam Warlock</h3>
                <p class="position">Admin</p>
            </div>
            <div class="team-card">
                <div class="circle"><img class="img" src="images/photo2.jpg"></div>
                <h3>Adha Orgusta</h3>
                <p class="position">Manager</p>
            </div>
            <div class="team-card">
                <div class="circle"><img class="img" src="images/photo3.jpg"></div>
                <h3>Christ Ewonz</h3>
                <p class="position">Support Team</p>
            </div>
            
        </div>

    <section id="mission">
        <div class="content">
            <h2>Our Story</h2>
            <p>Founded in 2020,NexSlot began as a smell team of passionate individuals with a vision to revolutionize the tech industry. 
                Over the years, we have grown into a leading company."Nexslot" is a web application that makes booking parking slots online in a building which is 
                situated in the heart of the city. You should register to the web site and then you can book a 
               parking slot whenever you want. The system has three main roles: manager, customer and 
               customer service representative.</p> 

            <br>
             <p>As a customer, you can either choose a normal account or a premium account. As a premium 
                user, you can choose your preferred parking slot for the whole day while the normal users only 
                get an automatically selected slot for a limited time. Managers oversee the admins and ensure 
                that daily reports are completed.</p>  
               
        </div>
    </section>


</body>
</html>
<?php
    include("footer.php");
?>
