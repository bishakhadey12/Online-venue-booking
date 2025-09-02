<?php
session_start();
$conn = mysqli_connect("localhost","root","","online_venue_booking");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $dquery = mysqli_query($conn,"DELETE FROM `venue` WHERE id=$id");

    if($dquery) {
        $_SESSION['sms'] = "Venue Deleted Successfully!";
        header("Location:../home.php");
        return;
    } else {
        $_SESSION['sms'] = "Delete Failed!";
        header("Location:../home.php");
        return;
    }
}
?>
