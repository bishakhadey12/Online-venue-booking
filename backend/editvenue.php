<?php
session_start();
$conn=mysqli_connect("localhost","root","","online_venue_booking");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<pre>";
    print_r($_POST);
}   
?>
