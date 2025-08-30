<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "online_venue_booking");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $vname =$_POST['vname'];
    $vaddress = $_POST['vaddress'];
    $vtype = $_POST['vtype'];
    $price_per_day = $_POST['price_per_day'];
    $venue_date = $_POST['venue_date'];
    $venue_other = $_POST['venue_other'];
    // Fetch existing images from DB
    $result = mysqli_query($conn, "SELECT venue_image FROM venue WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
    $existing_images = json_decode($row['venue_image'], true) ?: [];

    // Handle new uploaded images
    if(isset($_FILES['venue_images'])){
        $total_files = count($_FILES['venue_images']['name']);
        for($i=0; $i<$total_files; $i++){
            if($_FILES['venue_images']['error'][$i] === 0){
                $tmp_name = $_FILES['venue_images']['tmp_name'][$i];
                $filename = time().'_'.$i.'_'.basename($_FILES['venue_images']['name'][$i]);
                $target = "../uploads/".$filename;

                if(move_uploaded_file($tmp_name, $target)){
                    $existing_images[] = $filename;
                }
            }
        }
    }

    $venue_image_json = json_encode($existing_images);

    // Update venue
    $uquery = mysqli_query($conn, "UPDATE venue 
        SET vname='$vname', vaddress='$vaddress', vtype='$vtype', 
            price_per_day=$price_per_day, venue_date='$venue_date', 
            venue_other='$venue_other', venue_image='$venue_image_json'
        WHERE id=$id");

    if ($uquery) {
        $_SESSION['sms'] = "Venue Updated Successfully!";
    } else {
        $_SESSION['sms'] = "Error: " . mysqli_error($conn);
    }
    header("Location:../home.php");
    return;
}
