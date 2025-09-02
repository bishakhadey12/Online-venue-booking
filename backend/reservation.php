<?php
session_start();
$conn=mysqli_connect("localhost","root","","online_venue_booking");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $Fname=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $venue=$_POST['venue'];
    $bdate=$_POST['date'];
    $Tguest=$_POST['guests'];

    $select_query=mysqli_query($conn,"SELECT * FROM `reservation` WHERE phno = $phone");
    if(mysqli_num_rows($select_query)>0){
    $_SESSION['sms']="This mobile number is already exist try different one";
    header("location:../index.php");
    return;
    }else{
        $insert_query=mysqli_query($conn,"INSERT INTO `reservation`(`Fname`, `email`, `phno`, `select_venue`, `booking_date`, `Tguests`) VALUES ('$Fname','$email','$phone','$venue','$bdate','$Tguest')");
        if($insert_query){
        $_SESSION['sms']="Successfully reserved your place";
        header("location:../index.php");
        return;
        }
   }
}
?>