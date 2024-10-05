<?php
session_start();
if (!isset($_SESSION["email"])) {
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
    <title>Automated Parking System</title>
    <link rel="stylesheet" href="style\homepage.css">
</head>

<body>

    <!-- Image Slider/Carousel -->
    <section class="slider">
        <div class="slide">
            <video autoplay muted loop src="images\WhatsApp Video 2024-09-26 at 20.41.34_dd240a0e.mp4">
        </div>
        <div class="slide">
            <img src="images\im2.jpg" alt="Slide 2">
        </div>
        <div class="slide">
            <img src="images\im3.jpg" alt="Slide 3">
        </div>
        <div class="slide">
            <img src="images\im4.jpg" alt="Slide 3">
        </div>
        <div class="slide">
            <img src="images\im5.jpg" alt="Slide 2">
        </div>
        <div class="slide">
            <img src="images\im6.jpg" alt="Slide 2">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </section>

    <div class="part">
        <section class="cards">
            <div class="column">
                <div class="card" id="card"><img src="images\im1.jpg" alt="Card 1">
                    <div class="container" id="container">
                        <h4><b>Automated parking System</b></h4>
                        <p>Experience the future of parking with our *Automated Parking System*, designed for maximum
                            efficiency and convenience. This advanced system automates the process of parking your car,
                            reducing the time and effort traditionally required. Simply drive up to the designated
                            area,<span id="dots">...</span><span id="more"> and our technology takes care of the
                                rest—finding a suitable space, safely parking your vehicle, and retrieving it when
                                you're ready to leave. This system not only saves space and time but also improves
                                security and reduces the risk of damage, providing a seamless parking experience for
                                drivers in busy urban areas."
                            </span></p>
                        <button onclick="myFunction1()" id="myBtn">Read more</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card"><img src="images\im7.jpg" alt="Card 2">
                    <div class="container" id="container">
                        <h4><b>Parking solutions</b></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet,
                            nulla et dictum interdum, nisi lorem egestas vitae
                            scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor.
                                Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum
                                augue ut aliquet
                                Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc
                                venenatis imperdiet sed ornare turpis.
                                Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non
                                fermentum.
                                Sed dapibus pulvinar nibh tempor porta.</span></p>
                        <button onclick="myFunction2()" id="myBtn">Read more</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card"><img src="images\im8.jpg" alt="Card 3">
                    <div class="container">
                        <h4><b>Emergency Services</b></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet,
                            nulla et dictum interdum, nisi lorem egestas vitae
                            scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor.
                                Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum
                                augue ut aliquet
                                Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc
                                venenatis imperdiet sed ornare turpis.
                                Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non
                                fermentum.
                                Sed dapibus pulvinar nibh tempor porta.</span></p>
                        <button onclick="myFunction3()" id="myBtn">Read more</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Heading Section -->
    <section class="info">
        <h2>Experience Seamless Parking</h2>
        <p>Transform your parking experience with our state-of-the-art automated system.</p>
        <button>Get Started</button>
        <button>Learn More</button>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <h2>Frequently Asked Questions</h2>
        <p>Most of the customers request this questions about website </p>
        <div class="faq-item">
            <button class="accordion">Can all types of vehicles use the system?</button>
            <div class="panel">
                <p><b>Yes</b><i>, the NexSlot automated parking system is designed to accommodate a variety of vehicle
                        types,
                        including sedans, SUVs, and compact cars. However, certain large vehicles like trucks or RVs may
                        need to check the size restrictions to ensure compatibility with the parking structure.</i></p>
            </div>
        </div>
        <div class="faq-item">
            <button class="accordion">Is my vehicle secure in an automated parking system?</button>
            <div class="panel">
                <p><b>Absolutely.</b> <i>The NexSlot system employs advanced <mark>security features</mark> like
                        surveillance
                        cameras,
                        controlled access, and real-time monitoring to ensure your vehicle's safety. Additionally, since
                        the
                        system is automated, there is no risk of theft or damage caused by human handling.</i></p>
            </div>
        </div>
        <div class="faq-item">
            <button class="accordion">How does the automated parking system work?</button>
            <div class="panel">
                <p><i>The <b>NexSlot</b> automated parking system operates by guiding your vehicle to an available
                        parking spot
                        through an easy-to-follow process. Once parked, the system uses <mark>robotic platforms</mark>
                        to move and
                        store
                        your vehicle securely in the designated space. This reduces the time spent searching for a
                        parking
                        spot and maximizes the use of space.</i></p>
            </div>
        </div>
        <div class="faq-item"></div>
        <button class="accordion">What are the advantages of using premium packege?</button>
        <div class="panel">
            <p><i>The <b>premium package</b> offers several benefits, including priority parking
                    access,
                    dedicated spaces,
                    faster
                    processing times, and additional features like valet services, access to charging stations for
                    electric
                    vehicles, and exclusive <mark>24/7 support</mark>. It ensures a hassle-free, quick, and enhanced
                    parking
                    experience.</i></p>
        </div>
        </div>
    </section>


    <script src="js\script.js"></script>
</body>

</html>

<?php
include("footer.php");
?>