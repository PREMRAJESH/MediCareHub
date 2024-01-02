<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCareHub</title>
    <link
      rel="shortcut icon"
      href="../assets/icons8-hospital-96.png"
      type="image/x-icon"
    />
    <!-- link to css -->
    <link rel="stylesheet" href="../style/styles.css"/>
    <link rel="stylesheet" href="../style/about.css"/>
  </head>
  <body>
    <header>
      <h1 class="logo">
        <img src="../assets/icons8-hospital-96.png"alt="" height="30"width="30"/>
        MediCareHub
      </h1>
      <input type="checkbox" class="nav-toggle" id="nav-toggle" />
      <nav>
        <ul>
          <li id="home"><a href="../authentication/home.php">Home</a></li>
          <li id="myappointments"><a href="appointment.php">Appointment</a></li>
          <li id="pharmacy"><a href="pharmacy.php">Pharmacy</a></li>
          <li id="about"><a href="about.php">About</a></li>
          <li id="loginButton"><a href="../authentication/logout.php">logout</a></li>
          <li>
            <a href="tel:+919428367660">
              <button class="nav-btn">Call Now</button>
            </a>
          </li>
        </ul>
      </nav>
      <label for="nav-toggle" class="nav-toggle-label"><span></span></label>
    </header>
    <div class="about-container">
        <div class="about-img"><img src="../assets/icons8-hospital-96.png" alt=""></div>
        <h1>About Us</h1>
        <p>Welcome to MediCareHub, your comprehensive online platform dedicated to providing convenient medical services and information. We understand the importance of accessible healthcare and aim to bridge the gap between patients and medical professionals.</p>
        <p>Our mission is to empower individuals by offering a range of services, including online medical appointments, prescription delivery, and health resources. With a user-friendly interface, you can easily schedule appointments, communicate with healthcare providers, and manage your medical needs.
        At MediCareHub, we prioritize your well-being and strive to enhance your healthcare experience. Whether you're seeking medical advice, booking appointments, or staying informed about the latest health trends, we're here to support you every step of the way.</p>
    </div>
    <div class="contact-container">
        <h2>Contact Us</h2>
        <p>If you have any questions or concerns, feel free to reach out to us:</p>
        <ul>
            <li>Email: info@medicarehub.com</li>
            <li>Phone: +1 (123) 456-7890</li>
            <li>Address: 123 Medical Street, Cityville, State, Country</li>
        </ul>

        <h2>Features Available</h2>
        <p>Explore the features available on our platform:</p>
        <ul>
            <li>Online Medical Appointments</li>
            <li>Prescription Delivery</li>
            <li>Health Resources and Information</li>
            <li>User-Friendly Interface</li>
            <li>Communication with Healthcare Providers</li>
        </ul>
    </div>
</body>
</html>