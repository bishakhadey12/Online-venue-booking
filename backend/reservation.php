<?php
session_start();
$conn=mysqli_connect("localhost","root","","online_venue_booking");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $Fname=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $venue=$_POST['venue'];
    $booking_date=$_POST['date'];
    $Tguest=$_POST['guests'];

    
    $insert_query=mysqli_query($conn,"INSERT INTO `reservation`(`name`, `email`, `phno`, `venutyp`, `booking_date`, `Tguests`) VALUES ('$Fname','$email','$phone','$venue','$booking_date','$Tguest')");
    if($insert_query){
        $_SESSION['sms']="Successfully reserved your place, you wiil get a call from us";
        header("location:../index.php");
        return;
    }
}

?>