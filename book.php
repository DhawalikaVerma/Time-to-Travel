<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
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

<a href="home.php" class="logo"><img src="images/logo.png" alt=""></a>

<nav class="navbar">
    
<a href="home.php">Home</a>
<a href="about.php">About</a>
<a href="package.php">Package</a>
<a href="book.php">Book</a>

</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->
<div class="heading" , style="background:url(images/booking.jpg) no-repeat">
    <h1> Book Now </h1>
</div>

<!-- booking section starts here -->

<section class="booking">
    <h1 class="heading-title">book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputbox">
                <span>name : </span>
                <input type="text" placeholder="Enter your name" name="name">
            </div>
            <div class="inputbox">
                <span>email : </span>
                <input type="email" placeholder="Enter your email" name="email">
            </div>
            <div class="inputbox">
                <span>phone : </span>
                <input type="number" placeholder="Enter your number" name="phone">
            </div>
            <div class="inputbox">
                <span>address : </span>
                <input type="textarea" placeholder="Enter your address" name="address">
            </div>
            <div class="inputbox">
                <span>where to : </span>
                <input type="text" placeholder="Place you want to visit" name="location">
            </div>

            <div class="inputbox">
                <span>how many : </span>
                <input type="number" placeholder="number of guests" name="guest">
            </div>
            <div class="inputbox">
                <span>arrivals : </span>
                <input type="date"  name="arrivals">
            </div>

            <div class="inputbox">
                <span>leaving : </span>
                <input type="date"  name="leaving">
            </div>

        </div>
        <input type="submit" value="submit" class="btn" name="send" >
    </form>

</section>

<!-- booking section starts here -->





















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

<!-- footer section starts -->

<!-- swiper javascript link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom javascript file -->
<script src="script.js"></script>

    
</body>
</html>
