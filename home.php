<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- link to your custom css file -->
    <link rel="stylesheet" href="style.css">
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
</head>
<body>

<!-- header section starts -->

<section class="header">

<a href="home.php" class="logo">
    <img src="images/logo.png" alt="" class="img1">
</a>

<nav class="navbar">
    
<a href="home.php">Home</a>
<a href="about.php">About</a>
<a href="package.php">Package</a>
<a href="book.php">Book</a>

</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts -->



<section class="home">

<div class="swiper home-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide" style="background:url(images/desert.jpg) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>travel around the world</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/package.jpg) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>discover the new places</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>
        
        <div class="swiper-slide slide" style="background:url(images/night.png) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>make your tour worthwhile</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>


    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

</section>



<!-- home section ends -->




<!-- service section starts -->

<section class="services">

<h1 class="heading-title">our services </h1>
<div class ="box-container">
    <div class="box">
        <img src="images/adventure-icon.PNG" alt="">
        <h3>Adventure</h3>
    </div>

    <div class="box">
        <img src="images/tour-guide-icon.PNG" alt="">
        <h3>Tour guide</h3>
    </div>

    <div class="box">
        <img src="images/trekking-icon.PNG" alt="">
        <h3>Trekking</h3>
    </div>

    <div class="box">
        <img src="images/campfire.png" alt="">
        <h3>Camp fires</h3>
    </div>
    <div class="box">
        <img src="images/off-road.png" alt="">
        <h3>Off road</h3>
    </div>

    <div class="box">
        <img src="images/camping.png" alt="">
        <h3>Camping</h3>
    </div>




</div>


</section>

<!-- service section ends-->




<!-- home about section starts -->


<section class="home-about">
    <div class="image">
        <img src="images/about.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Welcome to TIME TO TRAVEL! We are passionate globetrotters who believe in the transformative power of travel. Founded by a team of seasoned travelers, adventurers, and wanderlust enthusiasts, our mission is to inspire and empower fellow explorers to embark on unforgettable journeys around the world.</p><br>
            <a href="about.php" class="btn">read more</a>
    </div>
</section>

<!-- home about section ends -->

<!-- home packages section starts -->

<section class="home-packages">
    <h1 class="heading-title">Our packages</h1>
    <div class="box-container">
    <div class="box">
            <div class="image">
                <img src="images/LondonBridge.jpg" alt="">
            </div>
            <div class="content">
                <h3>London Bridge</h3>
                <p>The London Bridge is a historic and iconic structure that spans the River Thames in central London, England.</p><br><br><br>

                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/eiffleTower.jpg" alt="">
            </div>
            <div class="content">
                <h3>Eiffle Tower</h3>
                <p>The Eiffel Tower, located in Paris, France, is an iconic symbol of the city and a masterpiece of engineering. </p><br><br><br>

                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/amsterdam.jpg" alt="">
            </div>
            <div class="content">
                <h3>Amsderdam</h3>
                <p>Amsterdam is the capital city of the Netherlands, known for its picturesque canals and historic architecture.</p><br><br><br>

                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>

    <br><br><div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>


<!-- home packages section ends -->

<!-- home offer section starts -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>At<strong>TIME TO TRAVEL</strong> , we are thrilled to offer an exclusive promotion that allows you to unlock incredible discounts of up to 50% off when you choose to explore three countries at a time. Whether you're dreaming of a European adventure, an Asian odyssey, or a cross-continent escapade, our special offer makes it easier than ever to fulfill your wanderlust while saving big on your travel expenses.</p><br><br>
            <a href="book.php" class="btn">Book Now</a>
    </div>
</section>
<!-- home offer section ends -->








<!-- footer section starts -->

<section class="footer">


<div class="box-container">
    <div class="box">
        <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>

    </div>

    <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
    
    </div>

    <div class="box">
        <h3>Contact info</h3>
        <a href="#"><i class="fas fa-phone"></i>+123 456 7890</a>
        <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
        <a href="#"><i class="fas fa-envelope"></i>khushipatel@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>mumbai, india - 400101</a>
    
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook-f "></i> facebook </a>
        <a href="#"><i class="fab fa-twitter"></i> twitter </a>
        <a href="#"><i class="fab fa-instagram "></i> instagram </a>
        <a href="#"><i class="fab fa-linkedin "></i> linkedin </a>
    </div>
</div>

<div class="credit"> created by <span>Dhawalika Verma</span> |  &copy; copyright | all rights reserved!</div>
</section>

<!-- footer section ends -->

<!-- swiper javascript link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom javascript file -->
<script src="script.js"></script>

<!--  jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--  Slick slider library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    
</body>
</html>
