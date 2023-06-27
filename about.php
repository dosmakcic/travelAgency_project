
<?php
include 'db2.php';

$query = "SELECT * FROM reviews";
$result = mysqli_query($con, $query);
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>



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
        echo '<a href="admin.php">Admin </a>';
    }
    ?>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>
</section>





<div class="heading"style="background:url(images/world-bg.jpg) no-repeat">
    <h1>about us</h1>
</div>



<section class="about">
    <div class="image">
        <img src="images/istockphoto-1285301614-612x612.jpg" alt="">
        
    </div>

    <div class="content">
        <h3>More about us</h3>
        <p>It all started from a small office in the picturesque Croatian city of Osijek. Our agency embarked on a journey, initially specializing in organizing travel experiences throughout Europe and world. With each successful venture, our passion and expertise expanded, allowing us to traverse borders and offer our services to the world.

From the moment of our establishment, our agency has remained dedicated to delivering exceptional quality and unforgettable journeys to our clients. We have consistently strived to enhance our offerings, diligently exploring new destinations and crafting unique itineraries. Our unwavering commitment to excellence has earned us the trust and admiration of countless travel enthusiasts.

If you, too, are a wanderlust-filled soul yearning for extraordinary adventures, allow us to be your trusted companion. With our wealth of experience and extensive knowledge, we will tailor your travel experiences to perfection, ensuring every moment is imbued with wonder and discovery.

 Let us unlock a world of possibilities and curate an unforgettable journey that will leave an indelible mark on your heart.

Embrace the wanderlust within you and entrust your dreams to our capable hands. Together, we will embark on a voyage of a lifetime, creating memories that will endure for years to come. Join us and let the magic of travel unfold."

        </p>
        


    </div>


</section>




<section class="reviews">
  <h1 class="heading-title"> clients reviews </h1>
<div class="swiper reviews-slider">

    <div class="swiper-wrapper">

    <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $stars = $row['stars'];
                $text = $row['text'];
                $name = $row['name'];
                $email = $row['email'];
                ?>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <?php
                        for ($i = 0; $i < $stars; $i++) {
                            echo '<i class="fas fa-star"></i>';
                        }
                        ?>
                    </div>
                    <p><?php echo $text; ?></p>
                    <h3><?php echo $name; ?></h3>
                    <span><?php echo $email; ?></span>
                    <img src="images/user.jpg" alt="">
                </div>
            <?php } ?>


   


    


   

   

















    </div>

</div>
   



<div class="load-more"><a href="review.php" class="btn">Give Us Your Thoughts</a></div>

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
            <a href="#"><i class="fas fa-envelope"></i>trvavel4you@gmail.com </a>
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
<script>
    var swiper = new Swiper(".reviews-slider", {
   loop: true,
   spaceBetween: 20,
   autoHeight: true,
   grabCursor: true,
   breakpoints: {
      640: {
         slidesPerView: 1,
      },
      768: {
         slidesPerView: 2,
      },
      1024: {
         slidesPerView: 3,
      },
   },
});
</script>
</body>
</html>