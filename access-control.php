<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VeriFact</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
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
<style>
    body.section-bg {
        background-image: url('img/land.jpg'); /* Replace with your image path */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
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
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="analyze.html" class="nav-item nav-link">Start Fact-checking</a>
                        <a href="about-us.php" class="nav-item nav-link">About Us</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Other Features</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="project.html" class="dropdown-item">Key Technology</a>
                                <a href="feature.html" class="dropdown-item">Cybersecurity Practices</a>
                                         </div>
                        </div>
                        <a href="reach-us.php" class="nav-item nav-link">Reach us</a>
                    </div>                  
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


<body class="section-bg">

<!-- Hero Section -->
<div class="container-fluid pt-5 bg-primary hero-header mb-5">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">VeriFact</div>
                <h1 class="display-4 text-white mb-4 animated slideInRight">Access Control & Account Protection</h1>
                <p class="text-white mb-4 animated slideInRight">
                Understand how access control systems secure digital environments and prevent unauthorized use.
                </p>
                <a href="#tips" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">Read More</a>
                <a href="contact.php" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
            </div>
            <div class="col-lg-6 align-self-end text-center text-lg-end">
                <img class="img-fluid" src="img/access-robo.png" alt="Email Security Illustration">
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-12">
            <div class="p-4 shadow-sm" style="
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border-radius: 20px;
                border: 1px solid rgba(255, 255, 255, 0.2);
                color: white;
            ">
                <h3 class="mb-4">What is Access Control?</h3>
                <p>
                    Access control refers to the policies and technologies used to restrict access to resources in a computing environment. It ensures only authorized users can access specific systems, data, or operations.
                </p>

                <h4 class="mt-4 text-warning">Types of Access Control</h4>
                <ul>
                    <li><strong>Discretionary Access Control (DAC):</strong> The owner determines who has access.</li>
                    <li><strong>Mandatory Access Control (MAC):</strong> Access is based on information clearance levels.</li>
                    <li><strong>Role-Based Access Control (RBAC):</strong> Permissions are assigned based on user roles.</li>
                    <li><strong>Attribute-Based Access Control (ABAC):</strong> Access is granted based on user attributes, environment, or resource.</li>
                </ul>

                <h4 class="mt-4 text-warning">Best Practices</h4>
                <ul>
                    <li>🛡️ Enforce least privilege — give users only the access they need</li>
                    <li>🔄 Regularly audit and review access rights</li>
                    <li>🔐 Use strong authentication (e.g., MFA)</li>
                    <li>🚪 Monitor login attempts and access logs</li>
                    <li>🧾 Document and enforce access policies</li>
                </ul>

                <h4 class="mt-4 text-warning">Common Access Control Tools</h4>
                 <ul>
                <li><strong><a href="https://www.okta.com/iam-identity-and-access-management/" target="_blank" rel="noopener noreferrer" style="color: #ffc107;">Okta</a></strong> – Identity & access management platform</li>
                <li><strong><a href="https://www.microsoft.com/en-us/security/business/identity-access/microsoft-entra-id" target="_blank" rel="noopener noreferrer" style="color: #ffc107;">Microsoft Azure Active Directory</a></strong></li>
                <li><strong><a href="https://www.permit.io/rbac?utm_source=google&utm_medium=cpc&utm_campaign=frameworks_low_income&gad_source=1&gad_campaignid=22214506502&gbraid=0AAAAABHkgLzGBuLTKtQqLuQ2EnRPFeHUh&gclid=Cj0KCQjwrPHABhCIARIsAFW2XBNN5EXHhWGVkILkhZ9yPVeC1eo76g3Y5VnqQqEtU0DAHQ2HDgZnLjoaAkFYEALw_wcB" target="_blank" rel="noopener noreferrer" style="color: #ffc107;">Auth0</a></strong> – Authentication as a service</li>
                <li><strong><a href="https://jumpcloud.com/lp/cloud-directory-fava-bean?gclid=Cj0KCQjwrPHABhCIARIsAFW2XBO1pW2FflfHK_9T6276fihr6bRZgf7w2iqIlj0eumx6ywLbDkB3gfwaAqq3EALw_wcB&creative=670781717242&keyword=jumpcloud%20solution&matchtype=b&network=g&device=c&utm_source=GoogleAds-Paid&utm_medium=Paid-Search&utm_term=jumpcloud%20solution&utm_content=&utm_campaign=Google_S_APJ_EN_Brand&cq_src=google_ads&cq_cmp=11990395845&cq_con=119605017247&cq_term=jumpcloud%20solution&cq_med=&cq_plac=&cq_net=g&cq_pos=&cq_plt=gp&gad_source=1&gad_campaignid=11990395845&gbraid=0AAAAADmUthBDsIifyWQavYMQnDO_sI2sq" target="_blank" rel="noopener noreferrer" style="color: #ffc107;">JumpCloud</a></strong> – Cloud directory for access control</li>
                </ul>
            </div>
        </div>
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
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="twitter.com"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="youtube.com"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="instagram.com"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    </div>
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

</body>
</html>
