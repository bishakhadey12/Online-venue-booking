<?php 
session_start();
$conn=mysqli_connect("localhost","root","","online_venue_booking");
include("header.php");
?>
<br>
<div class="container text-success text-center">
    <?php if(isset($_SESSION['sms'])): ?>
       <div class="alert alert-success"><?php echo $_SESSION['sms']; unset($_SESSION['sms']); ?></div>
    <?php endif; ?>
</div>
  <!-- Reservation Form Section -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4 align-items-center">
        <!-- Form -->
        <div class="col-md-6">
          <div class="form-section">
            <h3 class="mb-4 text-center">Reservation Form</h3>
            <form action="backend/reservation.php" method="POST">
              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Select Venue</label>
                <select name="venue" class="form-select" required>
                  <option value="">-- Choose a Venue --</option>
                  <option value="Banquet Hall">Banquet Hall</option>
                  <option value="Open Lawn">Open Lawn</option>
                  <option value="Conference Room">Conference Room</option>
                  <option value="Luxury Hall">Luxury Hall</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Booking Date</label>
                <input type="date" name="venue_date" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Number of Guests</label>
                <input type="number" name="guests" class="form-control">
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Submit Reservation</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Venue Pictures -->
        <div class="col-md-6">
          <div class="row g-3">
            <div class="col-6">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_vlqvZqX82v8PebJ1zPfFtSEyeFnHewMnQQ&s" class="venue-img" alt="Wedding Hall">
            </div>
            <div class="col-6">
              <img src="https://png.pngtree.com/thumb_back/fh260/background/20250506/pngtree-luxurious-wedding-venue-decor-image_17259968.jpg" class="venue-img" alt="Luxury Venue">
            </div>
            <div class="col-6">
              <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="venue-img" alt="Banquet">
            </div>
            <div class="col-6">
              <img src="https://islamabadclub.org.pk/ic/wp-content/uploads/2019/02/JU9A9495.jpg" class="venue-img" alt="Conference Room">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
<?php include("footer.php");?>