<?php

$connection = mysqli_connect('localhost','root','','bookdb');

if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guest = $_POST['guest'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO bookingform (name, email, phone, address, location, guest, arrivals, leaving) VALUES ('$name','$email','$phone','$address','$location','$guest','$arrivals','$leaving')";

     mysqli_query($connection, $request);
     header('location: book.php');
     exit(); // Make sure to exit after redirect

} else {
    echo 'Something went wrong, please try again';
}

?>
