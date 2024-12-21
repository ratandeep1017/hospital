<?php
include "connect.php";
session_start();
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .space {
            margin-bottom: 20px !important;

        }

        .colorprop {
            font-family: "Open Sans", sans-serif;
            font-size: 1rem;
            font-weight: bold;
            line-height: 1.5;
            color: crimson;
            -webkit-text-size-adjust: 100%;
        }

        .zoomcontainer {
            transition: transform 0.5s;
        }

        .zoomcontainer:hover {
            transform: scale(0.9);
            transform-origin: 50% 50%;
        }

        .image-container {
            text-align: left;
            margin-top: 20px;
        }

        .image-container img {
            width: 240%;
            height: 500px;
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


    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">User Details</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">User</a>
            </div>
        </div>
    </div>

    <!-- Contact Start -->
    <div class="colorprop container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="  col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded h-100 p-5" style="border-radius: 10px !important; padding:30px;">

                        <div class=" section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">User Details</h5>
                            <h1 class="display-6 mb-4">Your Account Details</h1>
                        </div>

                        <?php

                        if ((!isset($_SESSION['email'])) && (!isset($_SESSION['password'])) or isset($_POST['logout'])) {
                            session_unset();
                            session_destroy();
                            echo "<script>window.location.href = 'login.php';</script>";
                            exit;
                        } else {
                            // Get the logged-in user's email and password from the session
                            $email = $_SESSION['email'];
                            $password = $_SESSION['password'];

                            // Query to retrieve user details based on the email and password
                            $sql = "SELECT name, email, password, gender, age, city FROM registration WHERE email='$email' AND password='$password'";
                            $result = $conn->query($sql);

                            // Display user details
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo "<div  class='space d-flex align-items-center mb-2'>";
                                echo "<i class='bi bi-person fs-1 text-primary me-3'></i>";
                                echo "<div class='text-start'>";
                                echo "<h5 class='mb-0'>Logged-in User</h5>";
                                echo "<span>" . $row["name"] . "</span>";
                                echo "</div>";
                                echo "</div>";





                                echo "<div class='space d-flex align-items-center mb-2'>";
                                echo "<i class='bi bi-envelope-open fs-1 text-primary me-3'></i>";
                                echo "<div class='text-start'>";
                                echo "<h5 class='mb-0'>Email</h5>";
                                echo "<span>" . $row["email"] . "</span>";
                                echo "</div>";
                                echo "</div>";



                                echo "<div class='space d-flex align-items-center mb-2'>";
                                echo "<i class='bi bi-gender-ambiguous fs-1 text-primary me-3'></i>";
                                echo "<div class='text-start'>";
                                echo "<h5 class='mb-0'>Gender</h5>";
                                echo "<span>" . $row["gender"] . "</span>";
                                echo "</div>";
                                echo "</div>";



                                echo "<div class='space d-flex align-items-center mb-2'>";
                                echo "<i class='bi bi-backpack-fill fs-1 text-primary me-3'></i>";
                                echo "<div class='text-start'>";
                                echo "<h5 class='mb-0'>Age</h5>";
                                echo "<span>" . $row["age"] . "</span>";
                                echo "</div>";
                                echo "</div>";



                                echo "<div class='d-flex align-items-center mb-2'>";
                                echo "<i class='bi bi-geo-alt fs-1 text-primary me-3'></i>";
                                echo "<div class='text-start'>";
                                echo "<h5 class='mb-0'>City</h5>";
                                echo "<span>" . $row["city"] . "</span>";
                                echo "</div>";
                                echo "</div>";



                            } else {
                                echo "No user details found.";
                            }

                            // Close the database connection
                            $conn->close();
                        }
                        ?>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <div class="image-container">
                        <img src="img/thanks1.jpg">
                    </div>
                </div>
            </div>

        </div>

    </div>
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