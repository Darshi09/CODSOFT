<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel booking system</title>
    <!---swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <!---header-->
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="home.php" class="logo">Go<span>2</span>Explore</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="book.php">Book</a>
            <a href="package.php">Packages</a>
            <a href="services.php">Services</a>
            <a href="about.php">About</a>
            <a href="gallery.php">Gallery</a>
            <a href="review.php">Review</a>
        </nav>
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>

    <!--login-->
    <div class="login-form-container">
        <i class="fas fa-times" id="form-close"></i>
        <form action="" method="post">
            <h3>Login</h3>
            <input type="email" name="email" class="box" placeholder="Enter your email">
            <input type="password" name="password" class="box" placeholder="Enter your password">
            <input type="submit" value="Login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">Remember me</label>
            <p>Forget password? <a href="#">Click here</a></p>
            <p>Don't have any account? <a href="#">Register now</a></p>
        </form>
    </div>



<div class="heading" style="background:url(../book/image/6.jpg) no-repeat">
    <h1>Services</h1>
</div>
<section class="service">
    <h1 class="heading-title">Our services</h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>Five start and affordable hotels</h3>
            <p>Discover comfort and luxury at our boutique hotel, where every stay is a blend of elegance and relaxation.</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Food and drinks</h3>
            <p>A delicious journey that nourishes the body and delights the senses.</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>Safety guide</h3>
            <p>Your ultimate safety companion, providing essential tips and guidelines for worry-free travel adventures.</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>Fastest travel</h3>
            <p>Experience the thrill of high-speed travel, reaching your destination in record time.</p>
        </div>
        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>Customer Support</h3>
            <p>24/7 assistance for all your travel inquiries and issues, ensuring a seamless travel experience.</p>
        </div>
        <div class="box">
            <i class="fas fa-truck-medical"></i>
            <h3>Customer emergency services</h3>
            <p>24/7 assistance for travelers facing emergencies, ensuring safety and support anytime, anywhere</p>
        </div>
    </div>

</section>

<!----footer--->
<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>Ask questions </a>
            <a href="#"><i class="fas fa-angle-right"></i>About us</a>
            <a href="#"><i class="fas fa-angle-right"></i>Privacy policy </a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use </a>

        </div>

        <div class="box">
            <h3>Contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="#"><i class="fas fa-envelope"></i>travel09@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>Ahmedabad,Gujarat,India</a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>

        </div>
    </div>

    <div class="credit">Created by <span>Darshi Shah</span> | all rights reserved!<br>Copyright © 2024 Elegant Themes ®</div>
</section>





<!---swiper-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>




<!----js file-->
<script src="script.js"></script>
</body>
</html>