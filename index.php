<?php

// include "connect.php";

// session_start();

// if (isset ($_POST['add'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];
//     $gender = $_POST['gender'];
//     $age = $_POST['age'];
//     $city = $_POST['city'];

//     // Check if the email already exists
//     $check_email = "SELECT * FROM `registration` WHERE `email` = '$email'";
//     $result_email = $conn->query($check_email);

//     if ($result_email->num_rows > 0) {
//         echo "<script>alert('Email already registered. Please Proceed To Login Page.')</script>";
//     } else {
//         $insert = "INSERT INTO `registration`(`name`, `email`, `password`, `gender`, `age`, `city`) VALUES ('$name','$email','$pass','$gender','$age','$city')";
//         $result = $conn->query($insert);

//         if ($result) {
//             echo "<script>
//             if (confirm('Registration successful! Proceed to the next page?')) {
//                 window.location.href = 'login.php';
//             }
//         </script>";
//         }
//     }
// }
include "connect.php";
session_start();

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $city = $_POST['city'];

    // Check if the email already exists
    $check_email = "SELECT * FROM `registration` WHERE `email` = '$email'";
    $result_email = $conn->query($check_email);

    if ($result_email->num_rows > 0) {
        echo "<script>alert('Email already registered. Please Proceed To Login Page.');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    } else {
        $insert = "INSERT INTO `registration`(`name`, `email`, `password`, `gender`, `age`, `city`) VALUES ('$name','$email','$pass','$gender','$age','$city')";
        $result = $conn->query($insert);

        if ($result) {
            echo "<div id='loading-overlay' style='display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5); z-index:9999;'>
                <div style='position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); text-align:center; color:white;'>
                    <img src='img\Hourglass.gif' alt='Loading...'><br>
                    <span>Processing...</span>
                </div>
            </div>
            <script>
                document.getElementById('loading-overlay').style.display = 'block';
                setTimeout(function() {
                    if (confirm('Registration successful! Proceed to Login page?')) {
                        window.location.href = 'login.php';
                    }
                    
                    document.getElementById('loading-overlay').style.display = 'none';
                }, 2000); // Adjust the delay (in milliseconds) as needed
            </script>";
        }
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>

</style>

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



    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Registration</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Registration</a>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                </div>
                <div class="login-container p-xxl-3">
                    <h2 class="display-3 mb-4 pt-2 text-font-2 text-light">REGISTER</h2>
                    <form id="registrationForm" method="POST" onsubmit="return validatePasswords()">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control text-font" name="name" id="name"
                                        placeholder=" " required>
                                    <label for="name" class="form-label">Name</label>
                                    <div class="invalid-feedback invalid-feedback-name"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control text-font" name="email" id="email"
                                        aria-describedby="emailHelp" placeholder=" " required>
                                    <label for="email" class="form-label">Email</label>
                                    <div class="invalid-feedback invalid-feedback-email"></div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control text-font" name="pass" id="password"
                                        required placeholder=" " maxlength="9">
                                    <label for="password" class="form-label">Password</label>
                                    <p id="passwordError" style="color:white">
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control text-font" id="confirmPassword"
                                        placeholder=" " required maxlength="9">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="showPasswords">
                                    <label class="form-check-label" for="showPasswords">Show Passwords</label>
                                </div>
                            </div>

                        </div>
                        <div class="row text-light">
                            <div class="col-md-6">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="female">
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control text-font" id="age" name="age"
                                        placeholder=" " min="1">
                                    <label for="age" class="form-label">Age</label>
                                    <div class="invalid-feedback invalid-feedback-age"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control text-font" id="city" name="city"
                                        placeholder=" " required>
                                    <label for="city" class="form-label">City</label>
                                    <div class="invalid-feedback invalid-feedback-city"></div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block fw-bold text-light"
                            name="add">Register</button>
                        <button type="reset" class="btn btn-outline-secondary fw-bold btn-block">Clear</button>
                    </form>
                    <p class="mt-3 pt-2">Already registered? <a href="login.php" class="color-3">Login</a></p>
                </div>
            </div>
        </div>

    </div>


    <script type="text/javascript">
    function validatePasswords() {
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+])[0-9a-zA-Z!@#$%^&*()_+]{8,}$/;

        if (!passwordRegex.test(password)) {
            document.getElementById('passwordError').innerText =
                "Password must contain at least one digit, one lowercase letter, one uppercase letter, one special character, and be at least 8 characters long.";
            return false;
        }
        if (password !== confirmPassword) {
            document.getElementById('passwordError').innerText = 'Passwords do not match. Please try again.';
            return false;
        }
        return true;
    }


    document.getElementById('showPasswords').addEventListener('change', function() {
        var passwordInput = document.getElementById('password');
        var confirmPasswordInput = document.getElementById('confirmPassword');

        if (this.checked) {
            passwordInput.type = "text";
            confirmPasswordInput.type = "text";
        } else {
            passwordInput.type = "password";
            confirmPasswordInput.type = "password";
        }
    });

    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        var emailInput = document.getElementById('email');
        emailInput.value = emailInput.value.trim(); // Trim leading and trailing spaces

        // You can also trim the password input if needed
        var passInput = document.getElementById('password');
        passInput.value = passInput.value.trim(); // Trim leading and trailing spaces
    });
    </script>



    <script type="text/javascript" src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JavaScript Libraries -->
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