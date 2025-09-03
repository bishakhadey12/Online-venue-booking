<?php
session_start();
$conn=mysqli_connect("localhost","root","","online_venue_booking");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if($password !== $cpassword){
    $_SESSION['sms']="paswrd & conform pasword is not match";
    header("location:../register.php");
    return;
   }

   $select_query=mysqli_query($conn,"SELECT * FROM `ownerdetails` WHERE PHNO=$number");
   if(mysqli_num_rows($select_query)>0){
    $_SESSION['sms']="this mb no already exist";
    header("location:../register.php");
    return;
   }

   $hashpasword=password_hash($password,PASSWORD_DEFAULT);
   $insert_query=mysqli_query($conn,"INSERT INTO `ownerdetails`(`Ownername`, `PHNO`, `EMAIL`, `PASSWORD`) VALUES ('$name','$number','$email','$hashpasword')");

   if($insert_query){
    $_SESSION['sms'] = "Registration Successful!";
        header("Location:../venue.php"); // redirect to venue creation
        exit;
    } 
}
?>