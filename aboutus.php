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
                    <img src="vissionimage.jpg" alt="Vision image" width="150" height="150"/>
                </div>
                <div class="text">
                    <h2>Vision</h2>
                    <p>At NexSlot, our mission is to empower business with innovative technology solutions that drive growth, streamline operations, and ensure sustainable success.</p>
                </div>
            </div>
        </div>
        <div class="vision_mission">
            <div class="content">
                <div class="vision_mission_image">
                    <img src="missioimage1.jpg" alt="Mission image" width="150" height="10" style="background-color: #a3d9a5;"/>
                </div>
                <div class="text">
                    <h2>Mission</h2>
                    <p>At NexSlot, our mission is to empower business with innovative technology solutions that drive growth, streamline operations, and ensure sustainable success.</p>
                </div>
            </div>
        </div>
    </div>

    <!--Our team-->
    <div class="title">
        <h1>Meet Our Team</h1>
    </div>
    <div class="team-member-card">
    <div class="main-card">
        <!--Admin card-->
        <div class="cards">
           <div class="card">
            <div class="content">
                <div class="img">
                    <img src="img1.jpg" alt="matheeshaimg" width="100px"></img>
                </div>
                <div class="details">
                    <div class="name">Matheesha Kuruppu</div>
                    <div class="job">Admin</div>
                </div>
            </div> 
        </div> 

        <!--lecture card-->
        <div class="card">
            <div class="content">
                <div class="img">
                    <img src="img2.jpg" alt="adeeshaimg" width="100px"></img>
                </div>
                <div class="details">
                    <div class="name">Adeesha Harshana</div>
                    <div class="job">Manager</div>
                </div>
            </div> 
        </div> 

        <!--support team card-->
        <div class="card">
            <div class="content">
                <div class="img">
                    <img src="img3.jpg" alt="thisaraimg" width="100px"></img>
                </div>
                <div class="details">
                    <div class="name">Thisara Sandapiyum</div>
                    <div class="job">Support team</div>
                </div>
            </div> 
        </div> 
        <br><br>


        
    </div>
    </div>

    <section id="mission">
        <div class="content">
            <h2>Our Story</h2>
            <p>Founded in 2020,NexSlot began as a smell team of passionate individuals with a vision to revolutionize the tech industry. Over the years, we have grown into a leading company.</p>
        </div>
    </section>


</body>
</html>
<?php
    include("footer.php");
?>
