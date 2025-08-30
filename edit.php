<?php include("header.php");
session_start();
$conn=mysqli_connect("localhost","root","","online_venue_booking");
?>

<div class="container text-success text-center">
<?php
if(isset($_SESSION['sms'])){
    echo "<h3 class='text-danger'>".$_SESSION['sms']."</h3>";
    unset($_SESSION['sms']); // clear message
}
?>
</div>
<div class="container mt-5">
    <div class="text-center mb-4">
 <?php 
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    if(isset($_POST['id'])){
                ?>
                    <h1 class="display-1 text-secondary text-center mb-0">EDIT VENUE DETAILS</h1>
                <?php
                    }else{
                    ?>
                        <h1 class="display-1 text-secondary text-center mb-0">Create a Venue</h1>
                     <?php
                    }
                    }
                    ?>
                    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <!-- Corrected Form -->
                    <form id="registrationForm" method="post" action="backend/editvenue.php">
                        <?php 
                    $conn=mysqli_connect("localhost","root","","online_venue_booking");
                    if($_SERVER['REQUEST_METHOD']=="POST"){
                        if(isset($_POST['id'])){
                            $id=$_POST['id'];
                            $squery=mysqli_query($conn,"SELECT * FROM `venue` WHERE id=$id");
                            $data=mysqli_fetch_assoc($squery);
                        }
                    }
                            ?>
                            
                        <!-- Venue Name -->
                        <div class="form-group mb-3">
                            <label for="Vname">Venue Name</label>
                            <input type="text" name="vname" class="form-control" id="Vname" placeholder="Enter Venue Name" required>
                        </div>

                        <!-- Venue Area -->
                        <div class="form-group mb-3">
                            <label for="Varea">Full Address</label>
                            <input type="text" name="vaddress" class="form-control" id="Varea" placeholder="Enter Area/Location" required>
                        </div>

                       <div class="row mb-3">
    <!-- Venue Type -->
    <div class="col-md-4">
        <label for="Vtype" class="form-label">Type</label>
        <select class="form-control" name="vtype" id="Vtype" required>
            <option value="">-- Type AC/Non-AC --</option>
            <option value="AC">AC</option>
            <option value="Non-AC">Non-AC</option>
        </select>
    </div>

    <!-- Price per Day -->
    <div class="col-md-4">
        <label for="VpriceDay" class="form-label">Price per Day (₹)</label>
        <input type="number" name="price_per_day" class="form-control" id="VpriceDay" placeholder="Enter Price per Day" required>
    </div>
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
           name="venue_image[]" 
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