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
    <!-- <link rel="stylesheet" href="../style/styles.css"> -->
    <link rel="stylesheet" href="../style/pharmacy.css"/>
  </head>   
 <body>
 <?php if (isset($successMessage)) : ?>
    <div class="success-message-container">
        <p class="success-message"><?php echo $successMessage; ?></p>
        <span class="dismiss-message" onclick="dismissMessage()">Dismiss</span>
    </div>
    <script>
        function dismissMessage() {
            document.querySelector('.success-message-container').style.display = 'none';
        }
    </script>
<?php endif; ?>

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
          <li id="home"><a href="../authentication/home.php">Home</a></li>
          <li id="myappointments"><a href="appointment.php">Appointment</a></li>
          <li id="pharmacy"><a href="#">Pharmacy</a></li>
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

    <div class="pharmacy-container">
        <h2>Medicines Available</h2><hr>
        <div class="medicine-cards">
            <div class="medicine-card">
                <h3>Paracetamol</h3>
                <p>Common pain reliever and fever reducer</p>
                <p>Price: $5.99</p>
                <form method="post" action="">
                    <input type="hidden" name="medicine" value="Paracetamol">
                    <button type="submit" name="buy"class="med-btn">Buy</button>
                </form>
            </div>
            <div class="medicine-card">
            <h3>Aspirin</h3>
      <p>Used to treat pain, inflammation, and fever.</p>
      <p>Price: $3.49</p>
                <form method="post" action="">
                    <input type="hidden" name="medicine" value="Aspirin">
                    <button type="submit" name="buy"class="med-btn">Buy</button>
                </form>
            </div>
            <div class="medicine-card">
            <h3>Ibuprofen</h3>
      <p>Nonsteroidal anti-inflammatory drug (NSAID) for pain relief.</p>
      <p>Price: $6.79</p>
                <form method="post" action="">
                    <input type="hidden" name="medicine" value="Ibuprofen">
                    <button type="submit" name="buy"class="med-btn">Buy</button>
                </form>
            </div>
            <div class="medicine-card">
            <h3>Loratadine</h3>
      <p>Antihistamine used for allergies and hay fever.</p>
      <p>Price: $8.99</p>
                <form method="post" action="">
                    <input type="hidden" name="medicine" value="Loratadine">
                    <button type="submit" name="buy"class="med-btn">Buy</button>
                </form>
            </div>
            <div class="medicine-card">
            <h3>Omeprazole</h3>
      <p>Proton pump inhibitor for heartburn and acid reflux.</p>
      <p>Price: $9.49</p>
                <form method="post" action="">
                    <input type="hidden" name="medicine" value="Omeprazole">
                    <button type="submit" name="buy"class="med-btn">Buy</button>
                </form>
            </div>
            <div class="medicine-card">
            <h3>Ranitidine</h3>
      <p>H2 blocker for stomach ulcers and acid reflux.</p>
      <p>Price: $7.29</p>
                <form method="post" action="">
                    <input type="hidden" name="medicine" value="Ranitidine">
                    <button type="submit" name="buy"class="med-btn">Buy</button>
                </form>
            </div>
            <div class="medicine-card">
            <h3>Simvastatin</h3>
      <p>Cholesterol-lowering medication.</p>
      <p>Price: $12.99</p>
                <form method="post" action="">
                    <input type="hidden" name="medicine" value="Simvastatin">
                    <button type="submit" name="buy"class="med-btn">Buy</button>
                </form>
            </div>
            <div class="medicine-card">
            <h3>Metformin</h3>
      <p>Oral diabetes medication.</p>
      <p>Price: $6.49</p>
                <form method="post" action="">
                    <input type="hidden" name="medicine" value="Metformin">
                    <button type="submit" name="buy"class="med-btn">Buy</button>
                </form>
            </div>
            <div class="medicine-card">
            <h3>Albuterol</h3>
      <p>Bronchodilator for asthma and COPD.</p>
      <p>Price: $14.99</p>
                <form method="post" action="">
                    <input type="hidden" name="medicine" value="Albuterol">
                    <button type="submit" name="buy"class="med-btn">Buy</button>
                </form>
            </div>
        </div>
        <?php if (isset($successMessage)) : ?>
    <p class="success-message"><?php echo $successMessage; ?></p>
<?php endif; ?>
    </div>
    <footer>
      <p>&copy; 2023 MediCareHub All rights reserved.</p>
    </footer>
</body>
</html>
<!-- Add this HTML structure at the top of the <body> section -->
<div id="success-message" class="dismissable-message">
    <span class="dismiss-btn" onclick="dismissMessage()">×</span>
    <p id="message-content"></p>
</div>

<!-- The rest of your HTML code remains unchanged -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MediCareHub";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $medicineName = $_POST["medicine"];

    $medicinePrices = [
        'Paracetamol' => 5.99,
        'Aspirin' => 3.49,
        'Ibuprofen' => 6.79,
        'Loratadine' => 8.99,
        'Omeprazole' => 9.49,
        'Ranitidine' => 7.29,
        'Simvastatin' => 9.99,
        'Metformin' => 6.49,
        'Albuterol' => 14.99
    ];

    if (isset($medicinePrices[$medicineName])) {
        $price = $medicinePrices[$medicineName];
        $sql = "INSERT INTO medicines (name, price) VALUES ('$medicineName', '$price')";

        if ($conn->query($sql) === TRUE) {
            $successMessage = "Medicine '$medicineName' purchased successfully. Price: $$price";
        } else {
            $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $errorMessage = "Invalid medicine selection.";
    }
}

$conn->close();
?>

<script>
    // JavaScript function to dismiss the message
    function dismissMessage() {
        document.getElementById("success-message").style.display = "none";
    </script>

    <?php
    if (isset($successMessage)) :
        ?>
        <script>
            // Display success message when set
            document.getElementById("success-message").style.display = "block";
            document.getElementById("message-content").innerHTML = "<?php echo $successMessage; ?>";
        </script>
    <?php elseif (isset($errorMessage)) : ?>
        <p class="error-message"><?php echo $errorMessage; ?></p>
    <?php endif; ?>
