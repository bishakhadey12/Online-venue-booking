<?php
include("header.php");
session_start();
$conn=mysqli_connect("localhost","root","","online_venue_booking");
$result = mysqli_query($conn, "SELECT * FROM venue ORDER BY created_at DESC");
?>

<div class="container mt-5">
    <div class="row">
        <?php while($row = mysqli_fetch_assoc($result)) { 
    $images = json_decode($row['venue_image'], true);

    if (!is_array($images)) {
        // If not JSON, maybe single filename or comma-separated
        if (strpos($row['venue_image'], ',') !== false) {
            $images = array_map('trim', explode(',', $row['venue_image']));
        } else {
            $images = [$row['venue_image']];
        }
    }

    $first_image = $images[0] ?? 'default.jpg';
    echo "<!-- RAW: ".$row['venue_image']." -->";

?>

        <div class="col-md-4 mb-4">
            <div class="card shadow-lg">
           <img 
              src="uploads/<?php echo htmlspecialchars($first_image); ?>" 
              class="card-img-top" 
              alt="Venue Image"
              onerror="this.onerror=null;this.src='default.jpg';" height=100 weight=100>

                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['vname']; ?></h5>
                    <p class="card-text"><?php echo $row['vaddress']; ?></p>
                    <p><strong>Type:</strong> <?php echo $row['vtype']; ?></p>
                    <p><strong>Price:</strong> ₹<?php echo $row['price_per_day']; ?></p>
                    <p><?php echo $row['venue_details']; ?></p>

                    <?php if(!empty($row['venue_other'])) { ?>
                        <a href="<?php echo $row['venue_other']; ?>" target="_blank" class="btn btn-outline-info btn-sm mb-2">Visit Link</a>
                    <?php } ?>

                    <!-- Edit & Delete Buttons -->
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="backend/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include("footer.php");?>