<?php
$conn = mysqli_connect("localhost","root","","online_venue_booking");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $number=$_POST['number'];
    $password=$_POST['password'];
    $select_query=mysqli_query($conn,"SELECT * FROM `ownerdetails` WHERE PHNO=$number  AND password='$password'");

   if(mysqli_num_rows($select_query)>0){
    header("Location:../home.php");
    return;
   }
   if(!mysqli_num_rows($select_query)>0){
    $_SESSION['sms']="no user found, register first";
    header("Location:../login.php");
    return;
   }
   $user=mysqli_fetch_assoc($select_query);
   if(password_verify($password,$user['password'])){
    $_SESSION['sms']="wrong paswrd";
    header("Location:../login.php");
    return;
   }
   $_SESSION['user']=$user;
   header("Location:../home.php");
    return;

}
?>