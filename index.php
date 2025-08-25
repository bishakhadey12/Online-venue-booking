<?php 
include("header.php");
?>

  <!-- Reservation Form Section -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4 align-items-center">

        <!-- Form -->
        <div class="col-md-6">
          <div class="form-section">
            <h3 class="mb-4 text-center">Reservation Form</h3>
            <form action="submit_booking.php" method="POST">
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
                <input type="date" name="date" class="form-control" required>
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
              <img src="https://images.unsplash.com/photo-1591608516481-99c2c4b5a99d" class="venue-img" alt="Wedding Hall">
            </div>
            <div class="col-6">
              <img src="https://images.unsplash.com/photo-1508896694512-1eade5586798" class="venue-img" alt="Luxury Venue">
            </div>
            <div class="col-6">
              <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="venue-img" alt="Banquet">
            </div>
            <div class="col-6">
              <img src="https://images.unsplash.com/photo-1529634896389-2a7d2f56f89a" class="venue-img" alt="Conference Room">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

   <?php include("footer.php");?>