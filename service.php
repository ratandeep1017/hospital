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
        .zoomcontainer {
            transition: transform 0.5s;
        }

        .zoomcontainer:hover {
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
                <h1 class="display-3 text-white animated zoomIn">Services</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Services</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Services</h5>
                    </div>
                    <h1>Health Care Solutions</h1>
                </div>
                <div class="row g-4">
                    <div class="zoomcontainer col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-heartbeat text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Cardiology</h4>
                            <p class="mb-4">Cardiology is a branch of medicine that deals with disorders of the heart
                                and the cardiovascular system..</p>
                            <a class="btn" href="https://en.wikipedia.org/wiki/Cardiology"><i
                                    class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                    <div class="zoomcontainer col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-x-ray text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Pulmonary</h4>
                            <p class="mb-4"> Pulmonology is a broad specialty in medicine. It deals primarily with
                                diseases affecting the lungs..</p>
                            <a class="btn" href="https://en.wikipedia.org/wiki/Pulmonology"><i
                                    class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                    <div class="zoomcontainer col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-brain text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Neurology</h4>
                            <p class="mb-4">Neurology is the branch of medicine concerned with the study and treatment
                                of the nervous system.</p>
                            <a class="btn" href="https://en.wikipedia.org/wiki/Neurology"><i
                                    class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                    <div class="zoomcontainer col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-wheelchair text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Orthopedics</h4>
                            <p class="mb-4">Orthopedics focuses on treating the musculoskeletal system, including
                                muscles, bones, joints, ligaments, etc.</p>
                            <a class="btn" href="https://en.wikipedia.org/wiki/Orthopedic_surgery"><i
                                    class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                    <div class="zoomcontainer col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-tooth text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Dental Surgery</h4>
                            <p class="mb-4">Dental surgery encompasses a variety of medical procedures involving
                                artificial modification of dentition..</p>
                            <a class="btn" href="https://en.wikipedia.org/wiki/Dentistry"><i
                                    class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                    <div class=" zoomcontainer col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class=" service-item bg-light rounded h-100 p-5">
                            <div class=" d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-vials text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Laboratory</h4>
                            <p class="mb-4"> The laboratory is responsible for safety management within the laboratory
                                environment.</p>
                            <a class="btn" href="https://en.wikipedia.org/wiki/Medical_laboratory"><i
                                    class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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