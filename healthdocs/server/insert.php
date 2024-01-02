<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MediCareHub";

$conn =new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $treatment = $_POST['treatment'];
    $doctorName = $_POST['doctorName'];
    
    $sql = "INSERT INTO appointments (first_name, last_name, dob, gender, phone, address, city, pincode, email, preferred_date, preferred_time, treatment,appointed_doctor)
    VALUES ('$firstName', '$lastName', '$dob', '$gender', '$phone', '$address', '$city', '$pincode', '$email', '$date', '$time', '$treatment', '$doctorName')";


    if ($conn->query($sql) === TRUE) {
        header("Location:success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
