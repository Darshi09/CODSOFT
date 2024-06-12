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



<div class="heading" style="background:url(../book/image/4.jpg) no-repeat">
    <h1>Gallery</h1>
</div>
<section class="gellary" id="gellary">
<h1 class="heading-title">World Gallery</h1>
    <div class="box-container">
        <div class="box">
            <img src="../book/image/101.jfif" alt="">
            <div class="content">
                <h3>Water Shrine in japan</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/102.jfif" alt="">
            <div class="content">
                <h3>Big Ben Clock Tower in london</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/103.jfif" alt="">
            <div class="content">
                <h3>Cliche Yet The Best in bali</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/104.jfif" alt="">
            <div class="content">
                <h3>Museum of The Future in dubai</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/105.jfif" alt="">
            <div class="content">
                <h3>grand friday mosque in maldives</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/106.jfif" alt="">
            <div class="content">
                <h3>Louvre Museum in paris</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/107.jpg" alt="">
            <div class="content">
                <h3>Sydney Opera House in New Zealand</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/108.jpg" alt="">
            <div class="content">
                <h3>Marina Bay Sands in Singapore</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/109.jfif" alt="">
            <div class="content">
                <h3>Cellular Jail in Andaman Nicobar</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/110.jpg" alt="">
            <div class="content">
                <h3>Ciudad de las Artes y las Ciencias in Spain</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/111.jpg" alt="">
            <div class="content">
                <h3>Rovaniemi and the Arctic in Finland</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/112.jpg" alt="">
            <div class="content">
                <h3>Åland Archipelago in Finland</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/113.jfif" alt="">
            <div class="content">
                <h3>Kyaiktiyo Pagoda in Myanmar</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/114.jfif" alt="">
            <div class="content">
                <h3>Catedral de la Inmaculada Concepción in ecuador</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/115.jpg" alt="">
            <div class="content">
                <h3>The Army Museum in France</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/116.jpg" alt="">
            <div class="content">
                <h3>Blue Mosque in Turkey</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/117.jpg" alt="">
            <div class="content">
                <h3>Sahara Desert in Tunisia</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/118.jfif" alt="">
            <div class="content">
                <h3>Great Pyramid of Giza in Egypt</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/119.jfif" alt="">
            <div class="content">
                <h3>The Grand Palace in Thailand</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/120.jpg" alt="">
            <div class="content">
                <h3>Wat Rong Khun - White Temple in Thailand</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
        </div>

        <div class="box">
            <img src="../book/image/121.jpg" alt="">
            <div class="content">
                <h3> Kanchanaburi in Thailand</h3>
                <a href="package.php" class="btn">Show more</a>
            </div>
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