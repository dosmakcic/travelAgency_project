<?php
include 'db.php';



$query = "SELECT * FROM proizvodi";
$result = mysqli_query($con, $query);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<section class="header">
<a href="home.php" class="logo">Travel</a>
<nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="package.php">Package</a>
    <a href="book.php">Book</a>
    <?php
    // Check if the admin is logged in
    if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
        echo '<a href="add_products.php">Add Products</a>';
    } else {
        echo '<a href="admin.php">Admin</a>';
    }
    ?>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>
</section>

<!--header ends here-->



<section class="home">

<div class="swiper home-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide" style="background: url(images/New_York_City_at_night_HDR.jpg);">
            <div class="content">
                <span>Explore, Discover, Travel</span>
                <h3>travel around the world</h3>
                <a href="package.php" class="btn">Discover more</a>

            </div>
        </div>


        <div class="swiper-slide slide" style="background: url(images/greek.jpg);">
            <div class="content">
                <span>Explore, Discover, Travel</span>
                <h3>Discover the new places</h3>
                <a href="package.php" class="btn">Discover more</a>

            </div>
        </div>


        <div class="swiper-slide slide" style="background: url(images/osijek.jpg);">
            <div class="content">
                <span>Explore, Discover, Travel</span>
                <h3>make your tour worthwhile</h3>
                <a href="package.php" class="btn">Discover more</a>

            </div>
        </div>
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
</section>









<!--services begins here-->
<section class="services">
    <h1 class="heading-title">Our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/mountain.png" alt="">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="images/position.png" alt="">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="images/school-bag.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="images/fire.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="images/street-sign.png" alt="">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="images/camping-tent.png" alt="">
            <h3>camping</h3>
        </div>
    </div>
</section>






<section>
  <div class="home-about">
     <div class="image" ><img src="images/istockphoto-1285301614-612x612.jpg" alt=""></div>
     <div class="content">
        <h3>About us</h3>
        <p>It all started from a small office in the Croatian city of Osijek. 
            This agency first specialized in the organization of travel throughout Europe, then it spread to the world.
           Since its establishment, the agency has been constantly working on its quality and expanding to new destinations. 
            Therefore, if you are also a travel enthusiast, let us help you realize it with our many years of experience.</p>
            <a href="about.php" class="btn">Read more</a>
     </div>
  </div>
</section>





<section>
<div class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        <?php
        $query = "SELECT * FROM proizvodi LIMIT 3"; // Fetch only the first three records
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_assoc($result)) :
        ?>
            <div class="box">
            <div class="image">
                    <img src="<?php echo $row['image']; ?>" alt="">
                </div>

                <div class="content">
                    <h3><?php echo $row['name']; ?></h3>
                    <p style="color: green; font-weight: bold;">Price: $<?php echo $row['price']; ?></p>
                    <p>Available until: <?php echo $row['date']; ?></p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>

















<!--footer starts here-->
<section class="footer">
<div class="box-container">


        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>


        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>


        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +385-123-4557</a>
            <a href="#"><i class="fas fa-phone"></i> +123-234-5653</a>
            <a href="#"><i class="fas fa-envelope"></i >travel4you@gmail.com </a>
            <a href="#"><i class="fas fa-map"></i>zagreb, croatia</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>

        </div>

</div>


</section>
<!--footer ends here-->





<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>