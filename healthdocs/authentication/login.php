<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="shortcut icon" href="../assets/icons8-hospital-96.png" type="image/x-icon">
  <!-- link to css  -->
  <link rel="stylesheet" href="../style/login.css">
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form method="post" action="home.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Enter your username">
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password">
      
      <button type="submit" name="login">Login</button>

      <div class="forgot-password">
        <a href="forgotpw.php">Forgot Password?</a>
      </div>

      <div class="register">
        Don't have an account? <a href="register.php">Register here</a>
      </div>
      <?php if (isset($error)): ?>
            <p><?php echo $error; ?></p>
      <?php endif; ?>
    </form>
  </div>
</body>
</html>
<?php
session_start();

$server = "localhost";
$host = "root";
$db_password = "";
$database = "MediCareHub";

$con = mysqli_connect($server, $host, $db_password, $database);

if (!$con) {
    die("Error: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $user_id = $_POST['username'];
    $password = $_POST['password'];

    $stmt = mysqli_prepare($con, "SELECT username, password FROM `login` WHERE Username = ?");
    mysqli_stmt_bind_param($stmt, "s", $user_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $db_username, $db_password_hash);
    mysqli_stmt_fetch($stmt);

    if (password_verify($password, $db_password_hash)) {
        $_SESSION["user_id"] = $db_username;
        header("Location: home.php", true, 303);
        exit();
    } else {
        $error = "Invalid username or password";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>
