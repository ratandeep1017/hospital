<?php
include "connect.php";

session_start();
if ((!isset($_SESSION['email'])) && (!isset($_SESSION['password'])) or isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    echo "<script>window.location.href = 'login.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Care Ease </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    .zoomcontainer img {
        transition: transform 0.5s;
    }

    .zoomcontainer:hover img {
        transform: scale(0.9);
        transform-origin: 50% 50%;
    }
    </style>
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

    <!-- Topbar End -->
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
                        <p class="m-0"><i class="bi bi-github"></i><a  style="color:white;" href="https://github.com/ratandeep1017" target="_blank" rel="noopener noreferrer">&nbsp; My Github Account</a></p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="bi bi-linkedin"></i><a  style="color:white;" href="https://www.linkedin.com/in/ratandeep1017" target="_blank" rel="noopener noreferrer">  RatanDeep Singh</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="main.php" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><span style="color:black;">Care</span> Ease</h1>
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
                <a href="details.php" class="nav-item nav-link">User Details</a>
            </div>
            <form method="post">
                <input class="btn btn-primary text-light fw-bold" type="submit" name="logout" value="Logout">
            </form>
            <a class="nav-link" href="appointment.php"><button
                    class="btn btn-primary text-light fw-bold">Appointment</button></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Doctors</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Doctors</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Doctors</h5>
                        <h1 class="display-6 mb-4">Meet Our Certified & Experienced Doctors</h1>
                        <a href="appointment.php" class="btn btn-primary py-3 px-5">Appointment</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="zoomcontainer position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid " src="img/team-1.jpg" alt="">
                        </div>
                        <div class="team-text position-relative bg-light text-center p-4 pt-4">
                            <h4 class="mb-2">Dr. Sarah Patel</h4>
                            <p class="text-primary mb-0"><b>Specialization</b>: Cardiology</p>
                            <p class="text-primary mb-0"><b>Qualifications</b>: MD, FACC</p>
                            <p class="text-primary mb-0"><b>Experience</b>: 15 years</p>
                            <p class="text-primary mb-0"><b>Location</b>: New York, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="zoomcontainer position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid " src="img/team-2.jpg" alt="">
                        </div>
                        <div class="team-text position-relative bg-light text-center p-4 pt-4">
                            <h4 class="mb-2">Dr. Jen Wong</h4>
                            <p class="text-primary mb-0"><b>Specialization</b>: Pediatrics</p>
                            <p class="text-primary mb-0"><b>Qualifications</b>: MD, FAAP</p>
                            <p class="text-primary mb-0"><b>Experience</b>: 12 years</p>
                            <p class="text-primary mb-0"><b>Location</b>: San Francisco, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="zoomcontainer position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid " src="img/team-3.jpg" alt="">
                        </div>
                        <div class="team-text position-relative bg-light text-center p-4 pt-4">
                            <h4 class="mb-2">Dr. Michael Johnson</h4>
                            <p class="text-primary mb-0"><b>Specialization</b>: Orthopedic Surgery</p>
                            <p class="text-primary mb-0"><b>Qualifications</b>: MD, FRCSC</p>
                            <p class="text-primary mb-0"><b>Experience</b>: 20 years</p>
                            <p class="text-primary mb-0"><b>Location</b>: Toronto, Canada</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="zoomcontainer position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid " src="img/team-4.jpg" alt="">
                        </div>
                        <div class="team-text position-relative bg-light text-center p-4 pt-4">
                            <h4 class="mb-2">Dr. Emily Chen</h4>
                            <p class="text-primary mb-0"><b>Specialization</b>: Obstetrics and Gynecology</p>
                            <p class="text-primary mb-0"><b>Qualifications</b>: MD, FACOG</p>
                            <p class="text-primary mb-0"><b>Experience</b>: 18 years</p>
                            <p class="text-primary mb-0"><b>Location</b>: London, UK</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="zoomcontainer position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid " src="img/team-5.jpg" alt="">
                        </div>
                        <div class="team-text position-relative bg-light text-center p-4 pt-4">
                            <h4 class="mb-2">Dr. David Lee</h4>
                            <p class="text-primary mb-0"><b>Specialization</b>: Neurology</p>
                            <p class="text-primary mb-0"><b>Qualifications</b>: MD, FAAN</p>
                            <p class="text-primary mb-0"><b>Experience</b>: 22 years</p>
                            <p class="text-primary mb-0"><b>Location</b>: Los Angeles, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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