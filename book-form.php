<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');





    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO book_form (name, email, phone, adress, location, guests, arrivals, leaving)
     VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests','$arrivals', '$leaving')";

    mysqli_query($connection, $request);

   
 
?>

<script>
    alert('Podaci su uspješno poslani');
    window.location.href = 'book.php';
</script>
