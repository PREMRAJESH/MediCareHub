<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../style/login.css">
    <link rel="shortcut icon" href="../assets/icons8-hospital-96.png"type="image/x-icon"/>
</head>
<body>
    <style>
        .login{
            margin:0.3em;
            padding:2px;
        }
        .login a{
            text-decoration: none;
        }
    </style>
    <div class="btn">
        <button><a href="home.php">&#8592;</a></button>
    </div>
    <div class="login-container">
        <h2>Forgot Password</h2>
        <form method="post" action="forgot_password.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
            
            <button type="submit" name="reset">Reset Password</button>

            <div class="login">
                <a href="login.php">&#8592;Login</a>
            </div>
            <?php if (isset($message)): ?>
                <p class="message"><?php echo $message; ?></p>
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

if (isset($_POST['reset'])) {
    $email = $_POST['email'];

    // Validate email (you can add more validation)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format";
    } else {
        $stmt = mysqli_prepare($con, "SELECT username FROM `login` WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $db_username);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);

        if ($db_username) {
            $token = bin2hex(random_bytes(16));

            // Store the token in the database
            $stmt = mysqli_prepare($con, "UPDATE `login` SET reset_token = ? WHERE email = ?");
            mysqli_stmt_bind_param($stmt, "ss", $token, $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            // Send the password reset email
            $subject = "Password Reset";
            $message = "Click the link below to reset your password:\n";
            $message .= "http://yourwebsite.com/reset_password.php?token=$token";

            $headers = "From: webmaster@example.com";

            $successMessage = "Password reset link has been sent to your email";
        } else {
            $errorMessage = "Email not found in our records";
        }
    }
}

mysqli_close($con);
?>
