<?php
include "connect.php";
session_start();

// Check if the user is not logged in
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
                <!-- <a href="index.php" class="nav-item nav-link">Registration</a> -->
            </div>
            <form method="post">
                <input class="btn btn-primary text-light fw-bold" type="submit" name="logout" value="Logout">
            </form>
            <a class="nav-link" href="appointment.php"><button
                    class="btn btn-primary text-light fw-bold">Appointment</button></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">



                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Your Health, Our Ease</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Caring for You, Elevating Quality
                                Treatment
                            </h1>
                            <a href="appointment.php"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a href="contact.php"
                                class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>


                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Your Wellness, Our Priority
                            </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Caring for You, Elevating Quality
                                Treatment
                            </h1>
                            <a href="appointment.php"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a href="contact.php"
                                class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>




            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="zoomcontainer bg-primary d-flex flex-column p-5"
                        style="height: 300px; margin:10px 0 10px 0 ; border-radius:20px;">
                        <h3 class="text-white mb-3">Opening Hours</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Mon - Sat</h6>
                            <p class="mb-0"> 10:00am - 9:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Sunday</h6>
                            <p class="mb-0"> 8:00am - 5:00pm</p>
                        </div>
                        <a class="btn btn-light" href="appointment.php">Appointment</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="zoomcontainer bg-dark d-flex flex-column p-5"
                        style="height: 300px; border-radius:20px; margin-bottom:10px; margin-left:5px;">
                        <h3 class="text-white mb-3">Search A Doctor</h3>
                        <div class="date mb-3" id="date" data-target-input="nearest">
                            <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                placeholder="Appointment Date" data-target="#date" data-toggle="datetimepicker"
                                style="height: 40px;">
                        </div>
                        <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                            <option selected>Select A Service</option>
                            <option value="1">Cardiology</option>
                            <option value="2">Orthopedics</option>
                            <option value="3">Neurology</option>
                            <option value="4">Dental Surgery</option>
                            <option value="5">Laboratory</option>
                        </select>
                        <a class="btn btn-light" href="team.php">Search Doctor</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="zoomcontainer bg-secondary d-flex flex-column p-5"
                        style="height: 300px; border-radius:20px; margin-left:5px;">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white">You can take appointment from call this number</p>
                        <h3 class="text-white mb-0">+91 912-891-3845</h3>
                        <a style="margin-top:30px;" class=" btn btn-light" href="contact.php">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">The Best Hospital That You Can Trust</h1>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Expert Doctors</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Quality Service</h5>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-3">
                            <h2 class="text-primary" data-toggle="counter-up">23</h2>
                            <p class="text-primary">Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-3">
                            <h2 class="text-primary" data-toggle="counter-up">150</h2>
                            <p class="text-primary">Medical Stuff</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-3">
                            <h2 class="text-primary" data-toggle="counter-up">8540</h2>
                            <p class="text-primary">Total Patients</p>
                        </div>
                    </div>

                    <a href="appointment.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn"
                        data-wow-delay="0.6s">Make Appointment</a>
                </div>
                <div class="zoomcontainer  col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100 ">
                        <img class="imgs position-absolute w-100 h-100 rounded wow" src="img/about.jpg"
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Testimonial Start -->
    <div class="section-title mb-4">
        <h5 class="position-relative d-inline-block text-primary text-uppercase">Testimonial</h5>
    </div>
    <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto " src="img/testimonial-1.jpg" alt="">
                            <p class="fs-5">"Just superb! Contacting an online-searched hospital in Patna to become one
                                of my primary care centers, Care Ease is fabulous. I jot it down here. I would highly
                                recommend availing their international standard services."</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Christine</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto " src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">"The patient-friendly care provided by the doctors here is beyond what I
                                could have ever imagined. From nurses to paramedical staff, everyone works as a cohesive
                                team. I would wholeheartedly recommend this hospital to others."</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Chandlar</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto " src="img/testimonial-3.jpg" alt="">
                            <p class="fs-5">"At Care Ease, the services of all departments are exemplary. I don't have
                                enough words to express my appreciation for the care they provide. Thank you for being
                                so supportive at every junction of my treatment journey." </p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Joseph</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Doctors</h5>
                        <h1 class="display-6 mb-4">Meet Our Certified & Experienced Doctors</h1>
                        <a href="team.php" class="btn btn-primary py-3 px-5">Doctors Team</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class=" zoomcontainer position-relative rounded-top" style="z-index: 1;">
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
                <!--<div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">-->
                <!--    <div class="team-item">-->
                <!--        <div class="zoomcontainer position-relative rounded-top" style="z-index: 1;">-->
                <!--            <img class="img-fluid " src="img/team-3.jpg" alt="">-->
                <!--        </div>-->
                <!--        <div class="team-text position-relative bg-light text-center p-4 pt-4">-->
                <!--            <h4 class="mb-2">Dr. Michael Johnson</h4>-->
                <!--            <p class="text-primary mb-0"><b>Specialization</b>: Orthopedic Surgery</p>-->
                <!--            <p class="text-primary mb-0"><b>Qualifications</b>: MD, FRCSC</p>-->
                <!--            <p class="text-primary mb-0"><b>Experience</b>: 20 years</p>-->
                <!--            <p class="text-primary mb-0"><b>Location</b>: Toronto, Canada</p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">-->
                <!--    <div class="team-item">-->
                <!--        <div class="zoomcontainer position-relative rounded-top" style="z-index: 1;">-->
                <!--            <img class="img-fluid " src="img/team-4.jpg" alt="">-->
                <!--        </div>-->
                <!--        <div class="team-text position-relative bg-light text-center p-4 pt-4">-->
                <!--            <h4 class="mb-2">Dr. Emily Chen</h4>-->
                <!--            <p class="text-primary mb-0"><b>Specialization</b>: Obstetrics and Gynecology</p>-->
                <!--            <p class="text-primary mb-0"><b>Qualifications</b>: MD, FACOG</p>-->
                <!--            <p class="text-primary mb-0"><b>Experience</b>: 18 years</p>-->
                <!--            <p class="text-primary mb-0"><b>Location</b>: London, UK</p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">-->
                <!--    <div class="team-item">-->
                <!--        <div class="zoomcontainer position-relative rounded-top" style="z-index: 1;">-->
                <!--            <img class="img-fluid " src="img/team-5.jpg" alt="">-->
                <!--        </div>-->
                <!--        <div class="team-text position-relative bg-light text-center p-4 pt-4">-->
                <!--            <h4 class="mb-2">Dr. David Lee</h4>-->
                <!--            <p class="text-primary mb-0"><b>Specialization</b>: Neurology</p>-->
                <!--            <p class="text-primary mb-0"><b>Qualifications</b>: MD, FAAN</p>-->
                <!--            <p class="text-primary mb-0"><b>Experience</b>: 22 years</p>-->
                <!--            <p class="text-primary mb-0"><b>Location</b>: Los Angeles, USA</p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <!-- Team End -->
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
                    <!--<div class="zoomcontainer col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">-->
                    <!--    <div class="service-item bg-light rounded h-100 p-5">-->
                    <!--        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"-->
                    <!--            style="width: 65px; height: 65px;">-->
                    <!--            <i class="fa fa-wheelchair text-primary fs-4"></i>-->
                    <!--        </div>-->
                    <!--        <h4 class="mb-3">Orthopedics</h4>-->
                    <!--        <p class="mb-4">Orthopedics focuses on treating the musculoskeletal system, including-->
                    <!--            muscles, bones, joints, ligaments, etc.</p>-->
                    <!--        <a class="btn" href="https://en.wikipedia.org/wiki/Orthopedic_surgery"><i-->
                    <!--                class="fa fa-plus text-primary me-3"></i>Read More</a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="zoomcontainer col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">-->
                    <!--    <div class="service-item bg-light rounded h-100 p-5">-->
                    <!--        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"-->
                    <!--            style="width: 65px; height: 65px;">-->
                    <!--            <i class="fa fa-tooth text-primary fs-4"></i>-->
                    <!--        </div>-->
                    <!--        <h4 class="mb-3">Dental Surgery</h4>-->
                    <!--        <p class="mb-4">Dental surgery encompasses a variety of medical procedures involving-->
                    <!--            artificial modification of dentition..</p>-->
                    <!--        <a class="btn" href="https://en.wikipedia.org/wiki/Dentistry"><i-->
                    <!--                class="fa fa-plus text-primary me-3"></i>Read More</a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="zoomcontainer col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">-->
                    <!--    <div class="service-item bg-light rounded h-100 p-5">-->
                    <!--        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"-->
                    <!--            style="width: 65px; height: 65px;">-->
                    <!--            <i class="fa fa-vials text-primary fs-4"></i>-->
                    <!--        </div>-->
                    <!--        <h4 class="mb-3">Laboratory</h4>-->
                    <!--        <p class="mb-4"> The laboratory is responsible for safety management within the laboratory-->
                    <!--            environment.</p>-->
                    <!--        <a class="btn" href="https://en.wikipedia.org/wiki/Medical_laboratory"><i-->
                    <!--                class="fa fa-plus text-primary me-3"></i>Read More</a>-->
                    <!--    </div>-->
                    <!--</div>-->
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