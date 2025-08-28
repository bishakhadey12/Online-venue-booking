<?php include("header.php"); ?>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="display-5">Register Your Venue Details</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <!-- Corrected Form -->
                    <form id="registrationForm" method="post" action="save_venue.php" enctype="multipart/form-data">

                        <!-- Venue Name -->
                        <div class="form-group mb-3">
                            <label for="Vname">Venue Name</label>
                            <input type="text" name="venue_name" class="form-control" id="Vname" placeholder="Enter Venue Name" required>
                        </div>

                        <!-- Venue Area -->
                        <div class="form-group mb-3">
                            <label for="Varea">Full Address</label>
                            <input type="text" name="venue_area" class="form-control" id="Varea" placeholder="Enter Area/Location" required>
                        </div>

                        <!-- Venue Type -->
                        <div class="form-group mb-3">
                            <label for="Vtype">Type</label>
                            <select class="form-control" name="venue_type" id="Vtype" required>
                                <option value="">--  Type Ac/Non-Ac--</option>
                                <option value="AC">AC</option>
                                <option value="Non-AC">Non-AC</option>
                            </select>
                        </div>

                        <!-- Price per Hour -->
                        <div class="form-group mb-3">
                            <label for="VpriceHr">Price per Hour (₹)</label>
                            <input type="number" name="price_per_hr" class="form-control" id="VpriceHr" placeholder="Enter Price per Hour" required>
                        </div>

                        <!-- Price per Day -->
                        <div class="form-group mb-3">
                            <label for="VpriceDay">Price per Day (₹)</label>
                            <input type="number" name="price_per_day" class="form-control" id="VpriceDay" placeholder="Enter Price per Day" required>
                        </div>

                        <!-- Extra Details -->
                        <div class="form-group mb-3">
                            <label for="Vdetails">Extra Details</label>
                            <textarea name="venue_details" class="form-control" id="Vdetails" rows="4" placeholder="Enter additional information about the venue"></textarea>
                        </div>

                       <!-- Image Upload -->
<div class="form-group mb-4">
    <label for="Vimage">Upload Venue Images</label>
    <input type="file" 
           name="venue_images[]" 
           class="form-control" 
           id="Vimage" 
           multiple 
           accept=".jpeg, .jpg, .bmp, .webp" 
           required>
    <small class="form-text text-muted">
        Only JPEG, JPG, BMP, and WEBP formats are allowed. You can upload multiple images.
    </small>
</div>

<!-- any Social Media Links -->

<div class="form-group mb-3">
    <label for="Vother">Other Social Media links (Optional)</label>
    <input type="url" name="venue_other" class="form-control" id="Vother" placeholder="Enter Website / Other Social Link">
</div>


                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
