<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Make a Reservation - VenueBook</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    /* Header Background Image */
    .reservation-header {
      background: url('https://images.unsplash.com/photo-1531058020387-3be344556be6') no-repeat center center/cover;
      height: 50vh;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      width: 100%;
    }
    .reservation-header h1 {
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
    .venue-img {
      border-radius: 10px;
      height: 200px;
      object-fit: cover;
      width: 100%;
    }
    footer {
      background: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <!-- Navbar (full width background, centered content) -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container"> <!-- keeps left/right spacing -->
      <a class="navbar-brand fw-bold" href="index.php">VenueBook</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="price.php">Pricing</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="guide.php">Guide</a></li>
          <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header Section (full width background, text inside container) -->
  <div class="reservation-header">
    <div class="container">
      <h1 class="display-5">Reserve Your Place</h1>
      <p class="lead">Book your venue quickly and easily</p>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.10/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.10/dist/js/uikit-icons.min.js"></script>

</body>
</html>
