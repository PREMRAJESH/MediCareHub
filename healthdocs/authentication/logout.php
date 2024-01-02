<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // If logged in, destroy the session and redirect to the login page
    session_destroy();
    header("Location: login.php");
    exit();
} else {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <!-- Add your styles or link to a CSS file if needed -->
</head>
<body>
    <div>
        <h1>Logout Page</h1>
        <!-- You can add additional content here if needed -->
    </div>
</body>
</html>
