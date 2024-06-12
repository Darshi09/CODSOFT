<?php
session_start();
if (isset($_SESSION['message'])) {
    echo "<p>" . $_SESSION['message'] . "</p>";
    unset($_SESSION['message']);
}
?>



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
            <p>Don't have any account? <a href="registration.php">Register now</a></p>
        </form>
    </div>

<!-----HOME SECTION------------>
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="../book/image/h1.png" alt="">
                <div class="content">
                    <span>Explore,Discover,Travel</span>
                    <h3>Travel arround the world</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>
            <div class="swiper-slide slide">
            <img src="../book/image/h2.png" alt="">
                <div class="content">
                    <span>Explore,Discover,Travel</span>
                    <h3>The world is a canvas to the imagination</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>
            <div class="swiper-slide slide" >
            <img src="../book/image/h3.png" alt="">
                <div class="content">
                    <span>Explore,Discover,Travel</span>
                    <h3>Travel far enough, you meet yourself</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>
            <div class="swiper-slide slide" >
            <img src="../book/image/h4.png" alt="">
                <div class="content">
                    <span>Explore,Discover,Travel</span>
                    <h3>Take only memories, leave only footprints</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>



<!----packages--->
<section class="home-packages">
    <h1 class="heading-title">Our Package</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="../book/image/jl.jpg" alt="">
            </div>
            <div class="content">
                <h3>Travel in Japan</h3>
                <p>Go to Japan and enjoy the trip</p>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../book/image/lb.png" alt="">
            </div>
            <div class="content">
                <h3>Travel in London</h3>
                <p>Go to London and enjoy the trip</p>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../book/image/bali.png" alt="">
            </div>
            <div class="content">
                <h3>Travel in Bali</h3>
                <p>Go to Bali and enjoy the trip</p>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../book/image/bk.jpg" alt="">
            </div>
            <div class="content">
                <h3>Travel in Dubai</h3>
                <p>Go to Dubai and enjoy the trip</p>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../book/image/maldivs.png" alt="">
            </div>
            <div class="content">
                <h3>Travel in Maldives</h3>
                <p>Go to Maldives and enjoy the trip</p>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../book/image/pt.png" alt="">
            </div>
            <div class="content">
                <h3>Travel in Paris</h3>
                <p>Go to Paris and enjoy the trip</p>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </div>
    </div>
    <div class="load-more" ><a href="package.php" class="btn">Load more</a></div>
</section>

<!----service section start---->
<section class="services">
    <h1 class="heading-title">Our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="../book/image/icon1.png" alt="">
            <h3>Adventure</h3>
        </div>
        <div class="box">
            <img src="../book/image/icon2.png" alt="">
            <h3>Tour guide</h3>
        </div>
        <div class="box">
            <img src="../book/image/icon3.png" alt="">
            <h3>Trekking</h3>
        </div>
        <div class="box">
            <img src="../book/image/icon4.png" alt="">
            <h3>Camp fire</h3>
        </div>
        <div class="box">
            <img src="../book/image/icon5.png" alt="">
            <h3>Off road</h3>
        </div>
        <div class="box">
            <img src="../book/image/icon6.png" alt="">
            <h3>Camping</h3>
        </div>

    </div>


</section>
<!-------------about section start---->
<section class="home-about">
    <div class="image">
        <img src="../book/image/8.png" alt="">
    </div>
    <div class="content">
        <h3>About us</h3>
        <p>Luxury drives inclusive, sustainable growth in Travel & Tourism through collaboration, emphasizing its economic and social impact. It evolves, expanding its reach, advocating for global prosperity.</p>
        <a href="about.php" class="btn">Read more</a>
    </div>
</section>

<!-----offer section--->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Special Offer</p>
        <a href="book.php" class="btn">Book now</a>
    </div>
</section>

<!-----brand--->
<section class="brand-container">
    <div class="brand-slider">
        <div class="wrapper">
            <div class="slide"><img src="../book/image/l1.png" alt=""></div>
            <div class="slide"><img src="../book/image/l2.png" alt=""></div>
            <div class="slide"><img src="../book/image/l3.png" alt=""></div>
            <div class="slide"><img src="../book/image/l4.png" alt=""></div>
            <div class="slide"><img src="../book/image/l5.png" alt=""></div>
            <div class="slide"><img src="../book/image/l6.png" alt=""></div>
            <div class="slide"><img src="../book/image/l7.png" alt=""></div>
            <div class="slide"><img src="../book/image/l8.png" alt=""></div>
            <div class="slide"><img src="../book/image/l9.png" alt=""></div>
            <div class="slide"><img src="../book/image/l10.png" alt=""></div>
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















    <script src="script.js"></script>
</body>
</html>
