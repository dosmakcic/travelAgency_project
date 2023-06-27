<?php
$connection = mysqli_connect('localhost', 'root', '', 'users');





    $name = $_POST['name'];
    $email = $_POST['email'];
    $stars = $_POST['stars'];
    $comment = $_POST['comment'];
    

    $request = "INSERT INTO reviews (name, stars, text, email)
     VALUES ('$name', '$stars', '$comment', '$email' )";

    mysqli_query($connection, $request);

    header('Location: review.php');
 
?>
