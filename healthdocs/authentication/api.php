<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    // Redirect to the login page if the user is not logged in
    header("Location: authentication/login.php");

    exit();
}
?>