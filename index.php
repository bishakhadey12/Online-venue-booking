<?php include("header.php"); ?>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="display-5">Reserve Your Place</h1>
        <p class="lead">Book your venue quickly and easily</p>
    </div>

    <div class="card shadow-lg">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Booking Form</h2>

            <form action="submit_booking.php" method="post">
                <div class="mb-3">
                    <label for="reservation-type" class="form-label">Reservation Type</label>
                    <select id="reservation-type" name="reservation_type" class="form-select" required>
                        <option value="">-- Select Type --</option>
                        <option value="conference">Conference</option>
                        <option value="wedding">Wedding</option>
                        <option value="party">Party</option>
                        <option value="meeting">Meeting</option>
                        <option value="other">Coachin</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="start-date" class="form-label">From Date & Time</label>
                        <input type="datetime-local" id="start-date" name="start_datetime" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="end-date" class="form-label">To Date & Time</label>
                        <input type="datetime-local" id="end-date" name="end_datetime" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="total-people" class="form-label">Total People</label>
                    <input type="number" id="total-people" name="total_people" min="1" class="form-control" required>
</div>
                <div class="col-md-2 mb-3">
                    <label class="form-label d-block">Choose AC / Non-AC</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ac_option" id="ac" value="AC" required>
                        <label class="form-check-label" for="ac">AC</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ac_option" id="non-ac" value="Non-AC" required>
                        <label class="form-check-label" for="non-ac">Non-AC</label>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="extra-queries" class="form-label">Any Queries / Extra Requirements</label>
                    <textarea id="extra-queries" name="extra_queries" rows="4" class="form-control" placeholder="Let us know if you need catering, projector, special seating, etc."></textarea>
                </div>

                <div class="d-grid">
                    <button class="bg-green-600 text-white px-4 py-2 rounded">Submit</button>

                </div>
            </form>
        </div>
    </div>
</div>
