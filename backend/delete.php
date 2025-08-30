<?php
session_start();
$conn = mysqli_connect("localhost","root","","online_venue_booking");

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']); // safe int

    $dquery = mysqli_query($conn, "DELETE FROM `venue` WHERE id=$id");

    if ($dquery) {
        $_SESSION['sms'] = "Venue deleted successfully!";
        header("Location: ../home.php");
        exit();
    } else {
        $_SESSION['sms'] = "Delete failed: " . mysqli_error($conn);
        header("Location: ../home.php");
        exit();
    }
} 
?>
