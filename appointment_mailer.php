<?php
include "connect.php";

session_start();
require 'PHP MAILER\Exception.php';
require 'PHP MAILER\PHPMailer.php';
require 'PHP MAILER\SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location:login.php");
}

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $doctor = $_POST['doctor'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $problem = $_POST['problem'];

    $insert = "INSERT INTO `appointment`(`name`, `email`, `mobile`, `doctor`, `date`, `time`, `problem`) VALUES ('$name','$email','$mobile','$doctor','$date','$time','$problem')";

    $result = $conn->query($insert);


    if ($result) {

        // Create a new PHPMailer instance with exceptions enabled
        $mail = new PHPMailer(true);

        try {
            // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'avenleighton@gmail.com'; // SMTP username
            $mail->Password = 'wsoe iraw osfi qpjb'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
            $mail->Port = 465; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            // Set the sender and recipient addresses
            $mail->setFrom('favenleighton@gmail.com', 'CARE_EASE');
            $mail->addAddress($_POST['email']);

            // Store form data in variables
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $doctor = $_POST['doctor'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $problem = $_POST['problem'];

            // Redirect to main.php
            // header("location:main.php");

            // Set email content to HTML format
            $mail->isHTML(true);
            $mail->Subject = "$name Your Appointment is Confirmed!";
            $mail->Body = "<h3>Your Appointment is Confirmed With These Details:</h3><br>Email: $email <br><br> Mobile: $mobile <br><br> Doctor: $doctor <br><br> Date: $date <br><br> Time: $time <br><br>Your Problem: $problem";

            // Send the email and redirect to main.php if successful
            if ($mail->send()) {
                echo "<div id='loading-overlay' style='display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5); z-index:9999;'>
            <div style='position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); text-align:center; color:white;'>
                <img src='img\Hourglass.gif' alt='Loading...'><br>
                <span>Processing...</span>
            </div>
        </div>
        <script>
            document.getElementById('loading-overlay').style.display = 'block';
            setTimeout(function() {
                var scheduledDate = '$date';
                var scheduledTime = '$time';
                var confirmationMessage = 'Your appointment is scheduled on ' + scheduledDate + ' at ' + scheduledTime + '.';
                if (confirm(confirmationMessage)) {
                    window.location.href = 'main.php';
                }
                document.getElementById('loading-overlay').style.display = 'none';
            }, 2000); // Adjust the delay (in milliseconds) as needed
        </script>";
            }
        } catch (Exception $e) {
            // Display error message if an exception occurs
            echo "<div class='alert alert-danger'>TRY AGAIN THERE IS SOME ERROR!</div>";
        }
    } else {
        echo "Error: " . $conn->error;
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Care Ease </title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Sat : 10.00
                        am - 09.00 pm</small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>CareEase@gmail.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+91 912-891-3845</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="main.php" class="navbar-brand p-0">
            <h1 class="m-0 text-primary">Care Ease </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="main.php" class="nav-item nav-link active">Home</a>
                <a href="team.php" class="nav-item nav-link">Our Docters</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <!-- <a href="index.php" class="nav-item nav-link">Registration</a> -->
            </div>
            <a class="nav-link" href="index.php"><button class="btn btn-primary text-light fw-bold">LOG OUT</button></a>
            <a class="nav-link" href="appointment.php"><button
                    class="btn btn-primary text-light fw-bold">Appointment</button></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Appointment</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Appointment Start -->

    <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
            data-wow-delay="0.6s">
            <h1 class="text-white mb-4">Make Appointment</h1>
            <form method="POST" id="appointmentForm">
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <input type="text" class="form-control border-0" placeholder="Your Name" name="name"
                            style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="email" class="form-control border-0" placeholder="Your Email" name="email"
                            style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="text" class="form-control border-0" placeholder="Your Mobile" name="mobile"
                            style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <select class="form-select border-0" name="doctor" style="height: 55px;">
                            <option selected>Choose Doctor</option>
                            <option value="Dr. Sarah Patel">Dr. Sarah Patel</option>
                            <option value="Dr. Jen Wong">Dr. Jen Wong</option>
                            <option value="Dr. Michael Johnson">Dr. Michael Johnson</option>
                            <option value="Dr. Emily Chen">Dr. Emily Chen</option>
                            <option value="Dr. David Lee">Dr. David Lee</option>
                        </select>
                    </div>
                    <input type="hidden" id="randomDate" name="date" value="">
                    <input type="hidden" id="randomTime" name="time" value="">
                    <!-- <div class="col-12 col-sm-6">
                        <div class="date" id="date" data-target-input="nearest">
                            <input type="text" name="date" class="form-control border-0 datetimepicker-input"
                                placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker"
                                style="height: 55px;">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="time" id="time" data-target-input="nearest">
                            <input type="text" name="time" class="form-control border-0 datetimepicker-input"
                                placeholder="Choose time" data-target="#time" data-toggle="datetimepicker"
                                style="height: 55px;">
                        </div>
                    </div> -->
                    <div class="col-12">
                        <textarea class="form-control border-0" rows="5" name="problem"
                            placeholder="Describe your problem"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" id="btn" type="submit" name="add"
                            onclick="generateAndSubmitForm()">Book
                            Appointment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
    // var date, time;

    function generateRandomDateAndTime() {
        // Function to generate random date and time
        var currentDate = new Date();
        var randomDays = Math.floor(Math.random() * 6); // 0 to 5
        currentDate.setDate(currentDate.getDate() + randomDays);

        var randomHours = Math.floor(Math.random() * 10) + 9; // 9 to 18
        var randomMinutes = Math.floor(Math.random() * 2) * 30; // 0 or 30

        var hours12 = (randomHours % 12) || 12; // Handle 0 as 12
        var ampm = randomHours < 12 ? "AM" : "PM";

        var randomTime = hours12 + ":" + (randomMinutes === 0 ? '00' : randomMinutes) + " " + ampm;

        var options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        var randomDate = currentDate.toLocaleDateString(undefined, options);

        // Set the generated date and time to the hidden input fields
        document.getElementById('randomDate').value = randomDate;
        document.getElementById('randomTime').value = randomTime;
    }

    function generateAndSubmitForm() {
        // Call the function to generate random date and time
        generateRandomDateAndTime();
        // Submit the form
        document.getElementById('appointmentForm').submit();
    }
    </script>
    <!-- Appointment End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>