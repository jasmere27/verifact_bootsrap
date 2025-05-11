<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VeriFact</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="index.html" class="navbar-brand">
            <img src="img/verfact_logo.png" alt="VeriFact" style="height: 180px;">
        </a>

                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link ">Home</a>
                        <a href="analyze.html" class="nav-item nav-link">Start Fact-checking</a>
                        <a href="about-us.php" class="nav-item nav-link">About Us</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Other Features</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="project.html" class="dropdown-item">Key Technology</a>
                                <a href="feature.html" class="dropdown-item">Cybersecurity Practices</a>
                                         </div>
                        </div>
                        <a href="reach-us.php" class="nav-item nav-link active">Reach us</a>
                    </div>
                    
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <style>
        body {
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            font-family: 'Segoe UI', sans-serif;
        }


        .card.glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card.glass:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }

        .social-icons a {
            margin: 0 8px;
            color: #444;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #0d6efd;
        }

        .footer-socials i:hover {
            transform: scale(1.1);
            color: #0d6efd;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<div class="container-fluid py-4 bg-primary hero-header mb-4"> <!-- Reduced pt-5 to py-4 -->
    <div class="container py-4"> <!-- Reduced pt-5 to py-4 -->
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-5 text-white mb-3 animated slideInRight">Reach us online!</h1> <!-- display-4 -> display-5 -->
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <img class="img-fluid" src="img/contact-robot.png" alt="Hero Image">
            </div>
        </div>
    </div>
</div>


<!-- Team Section -->
<div class="container py-5">
    <div class="row g-4 justify-content-center">

        <!-- Team Member Card -->
        <div class="col-md-4 col-sm-6">
            <div class="card glass text-center h-100 rounded-4 p-3">
                <img src="img/jas-no-bg.png" class="card-img-top rounded-4 mb-3" alt="Team Member 1">
                <h5 class="fw-semibold">Jasmere Paul Calagui</h5>
                <p class="text-muted mb-2">PI/ Full stack Developer</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-github fa-lg"></i></a>
                    <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="mailto:jane@example.com"><i class="fas fa-envelope fa-lg"></i></a>
                </div>
            </div>
        </div>

        <!-- Another Member -->
        <div class="col-md-4 col-sm-6">
            <div class="card glass text-center h-100 rounded-4 p-3">
                <img src="img/zach-no-bg.png" class="card-img-top rounded-4 mb-3" alt="Team Member 2">
                <h5 class="fw-semibold">Cyrillo Zach Bognot</h5>
                <p class="text-muted mb-2">Document Specialist</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-github fa-lg"></i></a>
                    <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="mailto:john@example.com"><i class="fas fa-envelope fa-lg"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="card glass text-center h-100 rounded-4 p-3">
                <img src="img/keith-no-bg.png" class="card-img-top rounded-4 mb-3" alt="Team Member 1">
                <h5 class="fw-semibold">Keith Yancy David</h5>
                <p class="text-muted mb-2">Document Specialist</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-github fa-lg"></i></a>
                    <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="mailto:jane@example.com"><i class="fas fa-envelope fa-lg"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="card glass text-center h-100 rounded-4 p-3">
                <img src="img/team1.jpg" class="card-img-top rounded-4 mb-3" alt="Team Member 1">
                <h5 class="fw-semibold">Jane Doe</h5>
                <p class="text-muted mb-2">Lead Developer</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-github fa-lg"></i></a>
                    <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="mailto:jane@example.com"><i class="fas fa-envelope fa-lg"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="card glass text-center h-100 rounded-4 p-3">
                <img src="img/team1.jpg" class="card-img-top rounded-4 mb-3" alt="Team Member 1">
                <h5 class="fw-semibold">Jane Doe</h5>
                <p class="text-muted mb-2">Lead Developer</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-github fa-lg"></i></a>
                    <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="mailto:jane@example.com"><i class="fas fa-envelope fa-lg"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer with Socials -->
<div class="container text-center py-4">
    <h5 class="mb-3">Follow VeriFact</h5>
    <div class="footer-socials">
        <a href="#"><i class="fab fa-facebook fa-2x me-3"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x me-3"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x me-3"></i></a>
        <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
    </div>
</div>

 <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="d-inline-block mb-3">
        <h1 class="text-white">Veri<span class="text-primary">.</span>Fact</h1>
    </a>
    <p class="mb-0">
        VeriFact is your trusted platform for verifying news, promoting digital literacy, and educating users on
        essential cybersecurity practices. Our goal is to fight misinformation and help users stay safe and informed
        online.
    </p>
</div>

                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>OLFU Pampanga</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+99111111111</p>
                    <p><i class="fa fa-envelope me-3"></i>verifact@gmail.com</p>
                </div>
               <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
    <h5 class="text-white mb-4">Popular Link</h5>
    <a class="btn btn-link" href="analyze.html">Fact Checker</a>
    <a class="btn btn-link" href="about-us.php">About Us</a>

    <!-- Dropdown for Other Features -->
    <div class="dropdown">
        <a class="btn btn-link dropdown-toggle" href="#" id="featuresDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Other Features
        </a>
        <ul class="dropdown-menu" aria-labelledby="featuresDropdown">
            <li><a class="dropdown-item" href="project.html">Key Technologies</a></li>
            <li><a class="dropdown-item" href="feature.html">Cyber Security</a></li>
        </ul>
    </div>

    <a class="btn btn-link" href="contact.php">Reach Us</a>
</div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4">Our Services</h5>
                    <a class="btn btn-link" href="">News Fact Checking</a>
                    <a class="btn btn-link" href="feature.html">Learning Modules</a>
                    <a class="btn btn-link" href="#case-study">Basic Cybersecurity Practices</a>
                    
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>