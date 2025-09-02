<?php
include("header.php");
session_start();
$conn = mysqli_connect("localhost","root","","online_venue_booking");
$result = mysqli_query($conn, "SELECT * FROM venue ORDER BY created_at DESC");
?>

<div class="container mt-5">
    <?php if(isset($_SESSION['sms'])): ?>
        <div class="alert alert-success"><?php echo $_SESSION['sms']; unset($_SESSION['sms']); ?></div>
    <?php endif; ?>

    <div class="row">
        <?php while($row = mysqli_fetch_assoc($result)) { 
            $images = json_decode($row['venue_image'], true);
            if (!is_array($images)) $images = [$row['venue_image']];
            $first_image = $images[0] ?? 'default.jpg';
        ?>
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg">
                <img src="uploads/<?php echo $first_image; ?>" class="card-img-top" alt="Venue Image">

                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['vname']; ?></h5>
                    <p class="card-text"><?php echo $row['vaddress']; ?></p>
                    <p><strong>Type:</strong> <?php echo $row['vtype']; ?></p>
                    <p><strong>Price:</strong> ₹<?php echo $row['price_per_day']; ?></p>

                    <?php if(!empty($row['venue_other'])): ?>
                        <a href="<?php echo $row['venue_other']; ?>" target="_blank" class="btn btn-info btn-sm mb-2">Visit Link</a>
                    <?php endif; ?>

                    <!-- Edit & Delete -->
                    <a href="venue.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

                    <!-- Delete Button -->
                    <form action="backend/delete.php" method="POST" class="d-inline delete-form">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="button" class="btn btn-danger btn-sm delete-btn">Delete</button>
                    </form>

                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function () {
        let form = this.closest('.delete-form'); // nearest form
        Swal.fire({
            title: 'Are you sure?',
            text: "This venue will be permanently deleted!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: 'rgba(92, 42, 21, 1)',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // submit form only if confirmed
            }
        })
    });
});
</script>

<?php include("footer.php");?>