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
    <title>packages</title>



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





<div class="heading"style="background:url(images/packages.jpg) no-repeat">
    <h1>Packages</h1>
</div>


<section class="packages">
    <h1 class="heading-title"></h1>

    <div class="box-container">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
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
</body>
</html>