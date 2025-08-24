<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - VenueBook</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
    }
    .contact-header {
      background: url('https://images.unsplash.com/photo-1499951360447-b19be8fe80f5') no-repeat center center/cover;
      height: 50vh;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    .contact-header h1 {
      font-size: 3rem;
      font-weight: bold;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
    }
    .form-section {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
    }
    .contact-info {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
    }
    .venue-img {
      border-radius: 10px;
      height: 180px;
      object-fit: cover;
      width: 100%;
    }
    footer {
      background: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">VenueBook</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="price.php">Pricing</a></li>
          <li class="nav-item"><a class="nav-link active" href="login.php">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="venue.html">Venues</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contact Header -->
  <section class="contact-header">
    <div>
      <h1>Contact Us</h1>
      <p class="lead">We’d love to hear from you</p>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4">

        <!-- Contact Form -->
        <div class="col-md-6">
          <div class="form-section">
            <h3 class="mb-4 text-center">Send a Message</h3>
            <form action="submit_contact.php" method="POST">
              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea name="message" class="form-control" rows="5" required></textarea>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Contact Info + Images -->
        <div class="col-md-6">
          <div class="contact-info mb-4">
            <h4>Get in Touch</h4>
            <p><strong>📍 Address:</strong> 123 Venue Street, Kolkata, India</p>
            <p><strong>📞 Phone:</strong> +91 9876543210</p>
            <p><strong>✉ Email:</strong> support@venuebook.com</p>
          </div>
          <div class="row g-3">
            <div class="col-6">
              <img src="https://tse4.mm.bing.net/th/id/OIP.5m2E2C3j5DQOZ6Cx-C13pgHaEm?pid=Api&P=0&h=180" class="venue-img" alt="Conference Room">
            </div>
            <div class="col-6">
              <img src="https://tse2.mm.bing.net/th/id/OIP.dZWWg5LlJhlUFNNdNuLsIQHaEL?pid=Api&P=0&h=180" class="venue-img" alt="Wedding Venue">
            </div>
            <div class="col-6">
              <img src="https://tse1.mm.bing.net/th/id/OIP.oafyp8acjfnRDCIN0FMFoAHaE8?pid=Api&P=0&h=180" class="venue-img" alt="Banquet">
            </div>
            <div class="col-6">
              <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="venue-img" alt="Luxury Venue">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

   <?php include("footer.php");?>