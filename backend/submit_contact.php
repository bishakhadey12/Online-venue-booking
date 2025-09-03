<?php
session_start();
$conn = mysqli_connect("localhost","root","","online_venue_booking");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    $insert=mysqli_query($conn,"INSERT INTO `contact`(`name`, `email`, `subject`, `msg`) VALUES ('$name','$email','$subject','$message')");
    if ($insert) {
        $_SESSION['sms'] = "✅ Your message has been sent successfully. Our team will contact you via email shortly.";
    } else {
        $_SESSION['sms'] = "❌ Something went wrong. Please try again later.";
    }

    header("Location: ../contact.php");
    exit;
}


?>