<?php 
include("header.php"); 
?>
<div class="container mt-5">
    <h1 class="text-center mb-4">Available Venues</h1>
    <div class="row">

  


  <!-- Hero Section -->
  <section class="hero">
    <h1>Find the Perfect Venue for Your Event</h1>
    <p>Book Banquet Halls, Conference Rooms, Wedding Venues & More</p>
    <form class="row g-2 bg-light p-3 rounded mt-3" style="max-width: 700px; margin:auto;">
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Enter Location">
      </div>
      <div class="col-md-4">
        <input type="date" class="form-control">
      </div>
      <div class="col-md-3">
        <select class="form-select">
          <option>Event Type</option>
          <option>Wedding</option>
          <option>Parties</option>
          <option>Conferences</option>
          <option>Concerts</option>
        </select>
      </div>
      <div class="col-md-1">
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </form>
  </section>
 <!-- Hero Section -->
  <section class="hero">
    <div>
      <h1>Book Your Perfect Venue Online</h1>
      <p class="lead">Weddings • Conferences • Parties • Concerts</p>
      <a href="#" class="btn btn-primary btn-lg">Get Started</a>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-5">
    <div class="container text-center">
      <h2 class="mb-4">Why Choose Us?</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <img src="https://images.unsplash.com/photo-1523906834658-6e24ef2386f9" class="feature-img w-100" alt="Luxury Venues">
          <h5 class="mt-3">Wide Range of Venues</h5>
          <p>Choose from luxurious halls, open lawns, and more.</p>
        </div>
        <div class="col-md-4">
          <img src="https://cdn0.hitched.co.uk/articles/images/3/0/6/0/img_80603/the-old-course-hotel.jpg" class="feature-img w-100" alt="Easy Booking">
          <h5 class="mt-3">Easy Online Booking</h5>
          <p>Book your venue with just a few clicks anytime, anywhere.</p>
        </div>
        <div class="col-md-4">
          <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115" class="feature-img w-100" alt="Affordable Price">
          <h5 class="mt-3">Affordable Packages</h5>
          <p>Get the best venues at the most competitive prices.</p>
        </div>
      </div>
    </div>
  </section>

   <?php include("footer.php");?>