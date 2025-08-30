<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "online_venue_booking");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vname = $_POST['vname'];
    $vaddress= $_POST['vaddress'];
    $vtype =$_POST['vtype'];
    $price_per_day =$_POST['price_per_day'];
    $venue_date = $_POST['venue_date'];
    $venue_other = $_POST['venue_other'];

    $uploaded_images = [];

    if(isset($_FILES['venue_images'])){
        $total_files = count($_FILES['venue_images']['name']);
        for($i=0; $i<$total_files; $i++){
            $tmp_name = $_FILES['venue_images']['tmp_name'][$i];
            $filename = time().'_'.$i.'_'.basename($_FILES['venue_images']['name'][$i]);
            $target = "../uploads/".$filename;

            if(move_uploaded_file($tmp_name, $target)){
                $uploaded_images[] = $filename;
            }
        }
    }

    $venue_image_json = json_encode($uploaded_images);

    $insert_query = mysqli_query($conn,"INSERT INTO `venue`(`vname`, `vaddress`, `vtype`, `price_per_day`, `venue_date`, `venue_image`, `venue_other`) VALUES ('$vname','$vaddress','$vtype','$price_per_day','$venue_date','$venue_image_json','$venue_other')");
    if ($insert_query) {
        $_SESSION['sms'] = "Venue Created Successfully!"; 
    } else {
        $_SESSION['sms'] = "Error: " . mysqli_error($conn);
    }
    header("Location:../home.php");
    exit;
}
?>
