<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "online_venue_booking");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number   = mysqli_real_escape_string($conn, $_POST['number']);
    $password = $_POST['password'];

    // Fetch user
    $select_query = mysqli_query($conn, "SELECT * FROM `ownerdetails` WHERE PHNO='$number'");

    if (mysqli_num_rows($select_query) === 0) {
        $_SESSION['sms'] = "❌ No user found, please register first";
        header("Location: ../login.php");
        exit;
    }

    $user = mysqli_fetch_assoc($select_query);

    // Verify hash using correct column name
    if (!password_verify($password, $user['PASSWORD'])) {
        $_SESSION['sms'] = "❌ Wrong password";
        header("Location: ../login.php");
        exit;
    }

    // Success
    $_SESSION['sms']  = "✅ Welcome "; 
    $_SESSION['user'] = $user;
    header("Location: ../home.php");
    exit;
}
?>
