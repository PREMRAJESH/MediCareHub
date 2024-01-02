<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCareHub</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="shortcut icon" href="../assets/icons8-hospital-96.png" type="image/x-icon">
 <link rel="stylesheet" href="../style/appointment.css">
</head>
<body>
    <style>
    .go-btn{
    position: absolute;
    bottom:0px;
    left:0px;
    margin-left:20px;
    margin-bottom:50px;
  }
  .go-btn button{
    width:70px;
    background-color:white;
    font-size:2.2rem;
    border-radius:45%;
    border:none;
    opacity: 0.8;
    transition:all 0.3s linear;
    color:linear-gradient(19deg, blue 0%, #B721FF 100%);
  }
  .go-btn button:hover{
    transform: translate3d(-10px, 0px, 0);
  }
    </style>
<div class="go-btn">
  <button onclick="goBack()">&#8592;</button>
</div>
    <div class="container mt-6">
        <h1 class="text-center mb-4"><img class="img-fluid"src="../assets/icons8-hospital-96.png" alt=""height="40"width="40"> MediCareHub</h1><hr>
        <form action="../server/insert.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="male" name="gender" value="male" required>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="female" name="gender" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pincode">Pincode:</label>
                        <input type="text" class="form-control" id="pincode" name="pincode" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="date">Preferred Date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="time">Preferred Time:</label>
                <input type="time" class="form-control" id="time" name="time" required>
            </div>

            <div class="form-group">
                <label for="treatment">Treatment Type:</label>
                <select class="form-control" id="treatment" name="treatment" required>
                    <option value="general">General Checkup</option>
                    <option value="cardiology">Cardiology</option>
                    <option value="dermatology">Dermatology</option>
                </select>
            </div>
            <div class="form-group">
                <label for="doctorName">Appointed Doctor:</label>
                <select class="form-control" id="doctorName" name="doctorName" required>
                    <option value="Dr. Das">Dr. Das</option>
                    <option value="Dr. Patel">Dr. Patel</option>
                    <option value="DR. M shah">DR. M shah</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Book Appointment</button>
        </form>
    </div>
    <script src="../scripts/history.js"></script>
</body>
</html>
