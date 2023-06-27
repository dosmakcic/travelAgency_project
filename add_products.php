<?php
include 'db.php';

session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // If the user is not logged in, redirect them to admin.php
    header("Location: admin.php");
    exit;
}

if(isset($_GET['logout']) && $_GET['logout'] === 'true') {
    // Obrišite sesiju i kolačić za prijavu
    session_unset();
    session_destroy();
    setcookie('admin_login', '', time() - 3600, "/");
  
    // Preusmjerite na login stranicu
    header("Location: home.php");
    exit;
  }



if (isset($_GET['update'])) {
    $productId = $_GET['update'];

    $query = "SELECT * FROM proizvodi WHERE id = '$productId'";
    $result = mysqli_query($con, $query);
    $product = mysqli_fetch_assoc($result);
}

if (isset($_GET['delete'])) {
    $productId = $_GET['delete'];

    $query = "DELETE FROM proizvodi WHERE id = '$productId'";
    mysqli_query($con, $query);
    echo "Destination deleted.";
}

$query = "SELECT * FROM proizvodi";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Proizvodi</title>
    <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.dashboard-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

h2 {
  text-align: center;
}

.product-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  grid-gap: 20px;
  margin-top: 60px;
}

.product {
  border: 1px solid #ccc;
  padding: 20px;
  text-align: center;
}

.product img {
  width: 100%;
  max-height: 200px;
  object-fit: cover;
}

.btn-update {
  display: block;
  margin-top: 10px;
  text-decoration: none;
  background-color: #007bff;
  color: #fff;
  padding: 8px 16px;
  border-radius: 4px;
}

.add-product-btn {
  position: fixed;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  text-decoration: none;
  background-color: #007bff;
  color: #fff;
  padding: 12px 24px;
  border-radius: 4px;
}

.flex-btn{
    display: flex;
}

.add {
    transform: translateX(-50%);
    left: 50%;
    align-items: flex-end;
    margin-top: 10px;
    position: fixed;
    background-color: blue;
    color: #fff;
    border-radius: 4px;
    padding: 12px 24px;
    text-decoration: none;
}



.logout-button{
    
    position: fixed;
    background-color: red;
    color: #fff;
    border-radius: 4px;
    padding: 12px 24px;
    text-decoration: none;
}
    </style>
</head>
<body>
    <div class="flex-btn">
    <a href="home.php" class="add">Go back</a>
    <a href="add_products.php?logout=true" class="logout-button">Logout</a>
    </div>
    
    <div class="dashboard-container">
        <div class="product-container">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='product'>";
                    echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "' />";
                    echo "<h3>" . $row['name'] . "</h3>";
                    echo "<p>Price: $" . $row['price'] . "</p>";
                    echo "<p>Available until: " . $row['date'] . "</p>";
                    echo "<a href='update.php?id=" . $row['id'] . "' class='btn-update'>Modify destination</a>";
                    echo "</div>";
                }
            } else {
                echo "No available destinations.";
            }
            ?>
        </div>

        <a href="product.php" class="add-product-btn">Add destination</a>
       
    </div>
</body>
</html>
