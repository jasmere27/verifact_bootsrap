<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VeriFact</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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


    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                <h1 class="display-4 text-white mb-4 animated slideInRight">Test your knowledge.</h1>
                <!-- Updated href -->
                
            </div>
            <div class="col-lg-6 align-self-end text-center text-lg-end">
                <img class="img-fluid" src="img/hero-img.png" alt="">
            </div>
        </div>
    </div>
</div>
   <body>
  <div class="container py-5">
    <div class="p-4 glass-container">
      <h2 class="mb-4 text-white">💡 Cybersecurity Awareness Quiz</h2>
      <form id="quizForm"></form>
      <div class="mt-3">
        <button class="btn btn-primary me-2" onclick="checkQuiz()" type="button">Check Quiz</button>
        <button class="btn btn-outline-light" onclick="loadNewQuestions()" type="button">Answer More</button>
      </div>
      <div id="finalScore" class="mt-4 fw-bold"></div>
    </div>
  </div>

  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('img/blueb.png') no-repeat center center fixed;
      background-size: cover;
      font-family: Arial, sans-serif;
    }

    .glass-container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
    }

    .glass-container input[type="radio"] {
      margin-right: 6px;
    }

    .correct {
      color: #28a745; /* Bootstrap success color */
    }

    .incorrect {
      color: #dc3545; /* Bootstrap danger color */
    }

    .text-warning {
      color: #ffc107; /* Bootstrap warning color */
    }
  </style>

  <script>
    const questionSets = [
      [
        {
          question: "Which of the following is a sign of a phishing email?",
          options: ["It comes from a known sender", "It contains poor grammar and urgent language", "It has no links or attachments", "It uses professional formatting"],
          correct: "B"
        },
        {
          question: "What should you do before clicking on a link in an email?",
          options: ["Copy and paste it into your browser", "Click it immediately if the sender seems trustworthy", "Hover over it to preview the URL", "Forward it to a friend to check"],
          correct: "C"
        },
        {
          question: "Which practice helps protect your online accounts the most?",
          options: ["Using the same password everywhere", "Saving passwords in a text file", "Writing passwords down", "Enabling Two-Factor Authentication (2FA)"],
          correct: "D"
        }
      ],
      [
        {
          question: "What is the safest way to store your passwords?",
          options: ["In your notes app", "On a sticky note", "In a password manager", "In your browser bookmarks"],
          correct: "C"
        },
        {
          question: "Which is a secure protocol for websites?",
          options: ["http://", "ftp://", "telnet://", "https://"],
          correct: "D"
        },
        {
          question: "Which is a red flag on a social media post?",
          options: ["Verified account", "Excessive use of emojis and all caps", "Link to an official government page", "Well-written article"],
          correct: "B"
        }
      ]
    ];

    let currentSet = 0;

    function loadQuestions(setIndex) {
      const form = document.getElementById('quizForm');
      form.innerHTML = '';
      document.getElementById('finalScore').textContent = '';

      questionSets[setIndex].forEach((q, index) => {
        const qId = `q${index + 1}`;
        let qHtml = `<div class="mb-4">
          <h5>${index + 1}. ${q.question}</h5>`;
        q.options.forEach((opt, i) => {
          const optId = String.fromCharCode(65 + i); // A, B, C, D
          qHtml += `<div><input type="radio" name="${qId}" value="${optId}"> ${optId}) ${opt}</div>`;
        });
        qHtml += `<div id="feedback${index + 1}" class="mt-2"></div></div>`;
        form.innerHTML += qHtml;
      });
    }

    function checkQuiz() {
      const set = questionSets[currentSet];
      let score = 0;

      set.forEach((q, index) => {
        const qId = `q${index + 1}`;
        const selected = document.querySelector(`input[name="${qId}"]:checked`);
        const feedback = document.getElementById(`feedback${index + 1}`);
        const correct = q.correct;

        if (selected) {
          if (selected.value === correct) {
            feedback.innerHTML = "✅ Correct!";
            feedback.className = "correct";
            score++;
          } else {
            feedback.innerHTML = `❌ Incorrect. Correct answer: ${correct}`;
            feedback.className = "incorrect";
          }
        } else {
          feedback.innerHTML = "⚠️ Please select an answer.";
          feedback.className = "text-warning";
        }
      });

      document.getElementById("finalScore").innerHTML = `Your Score: ${score}/${set.length}`;
    }

    function loadNewQuestions() {
      currentSet = (currentSet + 1) % questionSets.length;
      loadQuestions(currentSet);
    }

    window.onload = () => loadQuestions(currentSet);
  </script>
</body>


   
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