<!DOCTYPE html>
<html>
<head>
    <title>Register Account</title>
    <link rel="shortcut icon" href="../assets/icons8-hospital-96.png" type="image/x-icon">

    <link rel="stylesheet" href="../styles/register.css">
    <link rel="stylesheet" href="../style/register.css">
</head>
<body>
<div class="btn">
  <button onclick="goBack()">&#8592;</button>
</div>
        <div class="register-container">
            <img src="../assets/icons8-hospital-96.png" alt="logo">
            <h2>Register Account</h2>
            <form method="post" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
        
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <button type="submit">Register</button>
            </form>
        </div>
        <script>
    function goBack() {
      window.history.back();
    }
  </script>
</body>
</html>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $username = $_POST['username'];
                $password =  $_POST['password'];
                $email = $_POST['email'];
                $hostname = 'localhost';
                $db_username = 'root';
                $db_password = '';
                $database = 'MediCareHub';
                // connecting to database
                $conn = mysqli_connect($hostname, $db_username, $db_password, $database);
                if (!$conn) {
                    die('Connection failed: ' . mysqli_connect_error());
                }
                // Inserting the user information into the database
                $query = "INSERT INTO login (username, email,password) VALUES ('$username','$email', '$password')";
                if (mysqli_query($conn, $query)) {
                    mysqli_close($conn);
                    header('Location: login.php'); 
                    exit();
                } else {
                    echo '<p style="color: red;">Error: ' . mysqli_error($conn) . '</p>';
                }
                // Close the database connection
                mysqli_close($conn);
            }
            ?>
