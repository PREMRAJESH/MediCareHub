
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MediCareHub</title>
    <link
      rel="shortcut icon"
      href="../assets/icons8-hospital-96.png"
      type="image/x-icon"
    />
    <!-- link to css -->
    <link rel="stylesheet" href="../style/styles.css"/>
  </head>
  <body>
    <header>
      <h1 class="logo">
        <img
          src="../assets/icons8-hospital-96.png"
          alt=""
          height="30"
          width="30"
        />
        MediCareHub
      </h1>
      <input type="checkbox" class="nav-toggle" id="nav-toggle" />
      <nav>
        <ul>
          <li id="home"><a href="#">Home</a></li>
          <li id="myappointments"><a href="../template/appointment.php">Appointment</a></li>
          <li id="pharmacy"><a href="../template/pharmacy.php">Pharmacy</a></li>
          <li id="about"><a href="../template/about.php">About</a></li>
          <li id="loginButton"><a href="logout.php">logout</a></li>
          <li>
            <a href="tel:+919428367660">
              <button class="nav-btn">Call Now</button>
            </a>
          </li>
        </ul>
      </nav>
      <label for="nav-toggle" class="nav-toggle-label"><span></span></label>
    </header>
    <!-- hero-section -->
    <div class="hero-container">
      <div class="hero-text">
        <h1 class="hero-title">Book Your Medical Appointments Online</h1>
        <p class="hero-description">Experience the convenience of scheduling and managing your medical appointments online.</p>
        <button class="hero-button"><a href="appointment.php">Get Started <span>&#8594;</span></a></button>
      </div>
      <div class="hero-image">
        <img src="../assets/hero-img.png" alt="Medical Hero Image" style="max-width: 100%;">
      </div>
    </div>
    <!-- hero section ends here  -->

    <!-- feature section -->
    <div class="feature-cards">
      <div class="feature-card 1">
        <div class="feature-icon">✓</div>
        <div class="feature-title">Easy Online Booking</div>
        <div class="feature-description">Schedule your medical appointments online at your convenience.</div>
      </div>
  
      <div class="feature-card 2">
        <div class="feature-icon">✓</div>
        <div class="feature-title">Doctor Selection</div>
        <div class="feature-description">Choose from a list of qualified doctors and specialists.</div>
      </div>
  
      <div class="feature-card 3">
        <div class="feature-icon">✓</div>
        <div class="feature-title">Instant Confirmation</div>
        <div class="feature-description">Receive instant confirmation and reminders for your appointments.</div>
      </div>
  
      <div class="feature-card 4">
        <div class="feature-icon">✓</div>
        <div class="feature-title">Medical History</div>
        <div class="feature-description">Access and manage your medical history and records online.</div>
      </div>
    </div>
    <!-- feature section ends here -->
   
    <footer>
      <p>&copy; 2023 MediCareHub All rights reserved.</p>
    </footer>
  </body>
</html>
