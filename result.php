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

    <style>
        .custom-form {
            background-color: var(--light);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(20, 24, 62, 0.1);
            max-width: 600px;
            margin: 50px auto;
        }

        .result-box {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        #spinner {
            display: flex;
        }

        #spinner.hide {
            display: none;
        }
    </style>

    <style>
    /* Animated Background */
    @keyframes gradientAnimation {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .animated-background {
        background: linear-gradient(-45deg, #1e3c72, #2a5298, #1e3c72, #2a5298);
        background-size: 400% 400%;
        animation: gradientAnimation 15s ease infinite;
    }

    /* Glassmorphism Enhanced */
    .glass-card {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
    }

    /* Floating Robot Animation */
    @keyframes float {
        0% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0); }
    }

    .robot-image {
        animation: float 3s ease-in-out infinite;
    }

    /* Button Hover */
    .btn-hover:hover {
        background-color: #fff !important;
        color: #007bff !important;
        transform: scale(1.05);
        transition: all 0.3s ease;
    }
</style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

   

<!-- Hero Section -->
<div class="container-fluid pt-5 bg-primary hero-header text-center" style="min-height: 40vh;">
    <div class="container pt-5">
        <div class="row justify-content-center align-items-center pt-5">
            <div class="col-lg-8">
                <h1 class="text-white mb-0">VeriFact - Fake News Detection Result</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid d-flex align-items-center justify-content-center animated-background"
     style="min-height: 100vh; margin-top: -60px; padding-top: 0px; background-size: cover; background-position: center; background-repeat: no-repeat;">

    <div class="container py-5">
        <div class="row g-5 justify-content-center align-items-center">

            <!-- Results Card -->
            <div class="col-lg-7 text-center">
                <div class="p-4 glass-card text-start text-white">

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] === "POST") {
                        $newsText = trim($_POST['news'] ?? '');
                        $hasImage = isset($_FILES['image']) && $_FILES['image']['error'] === 0;
                        $uploadedImageUrl = '';

                        $tesseractPath = "C:\\Program Files\\Tesseract-OCR\\tesseract.exe";

                        if ($hasImage) {
                            $imagePath = $_FILES['image']['tmp_name'];
                            $uploadDir = 'uploads/';
                            if (!file_exists($uploadDir)) {
                                mkdir($uploadDir, 0777, true);
                            }
                            $imageFilename = uniqid() . "_" . basename($_FILES['image']['name']);
                            $savedPath = $uploadDir . $imageFilename;

                            if (move_uploaded_file($imagePath, $savedPath)) {
                                $uploadedImageUrl = $savedPath;
                            }

                            $command = "\"$tesseractPath\" " . escapeshellarg($savedPath) . " stdout 2>&1";
                            $ocrText = shell_exec($command);
                            $newsText .= "\n" . trim($ocrText);
                        }

                        if (!empty($newsText)) {
                            $encodedNews = urlencode($newsText);
                            $apiUrl = "http://localhost:8080/api/v1/isFakeNews?news=" . $encodedNews;

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $apiUrl);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            $response = curl_exec($ch);

                            echo "<h4 class='text-warning'>🤖 AI Verdict:</h4>";
                            if (curl_errno($ch)) {
                                echo "<p class='text-danger'>Error contacting backend: " . curl_error($ch) . "</p>";
                            } else {
                                echo "
                                <p class='text-light fs-5 d-flex align-items-center'>
                                    <strong id='verdictText'>" . nl2br(htmlspecialchars($response)) . "</strong>
                                    <button id='speakButton' class='btn btn-sm btn-light ms-3 px-3 py-1 rounded-pill btn-hover' 
                                            title='Speak Verdict' style='font-size: 1rem;'>
                                        🔊
                                    </button>
                                </p>
                            ";
                            }

                            curl_close($ch);

                            if (!empty($uploadedImageUrl)) {
                                echo "
                                    <h5 class='mt-4 text-warning'>🖼️ Uploaded Image:</h5>
                                    <a href=\"$uploadedImageUrl\" target=\"_blank\">
                                        <img src=\"$uploadedImageUrl\" alt=\"Uploaded News Image\" 
                                            class='img-fluid rounded-4 border mt-2 shadow-sm' 
                                            style='max-width: 400px; max-height: 400px; cursor: zoom-in;'>
                                    </a>
                                ";
                            }
                        } else {
                            echo "<p class='text-light'>Please enter news text or upload a readable image.</p>";
                        }
                    } else {
                        echo "<p class='text-light'>No data submitted.</p>";
                    }
                    ?>

                    <form action="analyze.html" method="get" class="mt-4 text-center">
                        <button type="submit" class="btn btn-light text-primary fw-bold rounded-pill px-4 shadow-sm btn-hover">
                            🔄 Analyze Other News
                        </button>
                    </form>
                </div>
            </div>

            <!-- Robot Image -->
            <div class="col-lg-5 text-center">
                <img class="img-fluid mt-4 mt-lg-0 robot-image" src="img/robo-analyze.png" alt="Analyzing Robot" style="max-height: 400px;">
            </div>

        </div>
    </div>
</div>

<!-- Speech Script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const speakBtn = document.getElementById('speakButton');
        const verdictTextElem = document.getElementById('verdictText');

        if (speakBtn && verdictTextElem) {
            let isSpeaking = false;
            const synth = window.speechSynthesis;

            function sanitizeText(text) {
                return text
                    .replace(/[*#~^_`<>[\]{}]/g, '')
                    .replace(/\s{2,}/g, ' ')
                    .replace(/[\r\n]+/g, '. ');
            }

            speakBtn.addEventListener('click', () => {
                if (isSpeaking) {
                    synth.cancel();
                    isSpeaking = false;
                    speakBtn.textContent = '🔊';
                } else {
                    let text = verdictTextElem.innerText;
                    text = sanitizeText(text);

                    if (text.trim()) {
                        const utterance = new SpeechSynthesisUtterance(text);
                        utterance.lang = 'en-US';
                        utterance.rate = 1;
                        utterance.pitch = 1;

                        synth.cancel();
                        synth.speak(utterance);
                        isSpeaking = true;

                        utterance.onend = () => {
                            isSpeaking = false;
                            speakBtn.textContent = '🔊';
                        };

                        speakBtn.textContent = '⏹️';
                    }
                }
            });
        }
    });
</script>

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
