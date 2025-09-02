<?php
session_start();
include("header.php");
$conn = mysqli_connect("localhost","root","","online_venue_booking");

// Initialize empty venue data for create mode
$venue = [
    'id'=>'',
    'vname'=>'',
    'vaddress'=>'',
    'vtype'=>'',
    'price_per_day'=>'',
    'venue_date'=>'',
    'venue_other'=>''
];

$isEdit = false;

// Check if editing (id passed in GET)
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = intval($_GET['id']);
    $result = mysqli_query($conn, "SELECT * FROM venue WHERE id=$id");
    if($result && mysqli_num_rows($result) > 0){
        $venue = mysqli_fetch_assoc($result);
        $isEdit = true;
    } else {
        $_SESSION['sms'] = "Venue not found!";
        header("Location: home.php");
        exit;
    }
}
?>

<div class="container mt-5">
    <h2 class="text-center"><?php echo $isEdit ? "Edit Venue" : "Create New Venue"; ?></h2>

    <!-- enctype="multipart/form-data" needed for file upload -->
    <form action="backend/<?php echo $isEdit ? 'editvenue.php' : 'createvenue.php'; ?>" 
          method="post" enctype="multipart/form-data">
        
        <?php if($isEdit): ?>
            <input type="hidden" name="id" value="<?php echo $venue['id']; ?>">
        <?php endif; ?>

        <div class="form-group mb-3">
            <label>Venue Name</label>
            <input type="text" name="vname" class="form-control" value="<?php echo htmlspecialchars($venue['vname']); ?>" required>
        </div>

        <div class="form-group mb-3">
            <label>Address</label>
            <input type="text" name="vaddress" class="form-control" value="<?php echo htmlspecialchars($venue['vaddress']); ?>" required>
        </div>

        <div class="form-group mb-3">
            <label>Venue Type</label>
            <select class="form-control" name="vtype" required>
                <option value="">-- Select Venue Type --</option>
                <option value="luxury hall" <?php if($venue['vtype']=="luxury hall") echo "selected"; ?>>Luxury Hall</option>
                <option value="wedding" <?php if($venue['vtype']=="wedding") echo "selected"; ?>>Wedding</option>
                <option value="conference room" <?php if($venue['vtype']=="conference room") echo "selected"; ?>>Conference Room</option>
                <option value="birthday" <?php if($venue['vtype']=="birthday") echo "selected"; ?>>Birthday</option>
                <option value="anniversary" <?php if($venue['vtype']=="anniversary") echo "selected"; ?>>Anniversary</option>
                <option value="other" <?php if($venue['vtype']=="other") echo "selected"; ?>>Other</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label>Price Per Day</label>
            <input type="number" name="price_per_day" class="form-control" value="<?php echo htmlspecialchars($venue['price_per_day']); ?>" required>
        </div>

        <div class="form-group mb-3">
            <label>Booking Date</label>
            <input type="date" name="venue_date" class="form-control" value="<?php echo htmlspecialchars($venue['venue_date']); ?>" required>
        </div>

        <div class="form-group mb-3">
            <label>Venue Images</label>
            <input type="file" name="venue_images[]" class="form-control" multiple accept=".jpg,.jpeg,.png,.webp,.bmp" <?php echo $isEdit ? '' : 'required'; ?>>
            <small class="form-text text-muted">
                You can upload multiple images. Allowed: JPG, JPEG, PNG, WEBP, BMP
            </small>
        </div>

        <div class="form-group mb-3">
            <label>Social Link (Optional)</label>
            <input type="url" name="venue_other" class="form-control" value="<?php echo htmlspecialchars($venue['venue_other']); ?>">
        </div>

        <button type="submit" class="btn btn-success">
            <?php echo $isEdit ? "Update Venue" : "Create Venue"; ?>
        </button>
    </form>
</div>

<?php include("footer.php"); ?>
