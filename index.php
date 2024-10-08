<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Complaint System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        /* General styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #212529;
            color: #f8f9fa;
        }

        /* Navbar */
        .navbar {
            transition: all 0.3s ease;
            z-index: 997;
            background: transparent;
            box-shadow: none;
        }

        .navbar.scrolled {
            background: linear-gradient(45deg, #ff007a, #ffcc00);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #f8f9fa !important;
        }

        .navbar-toggler {
            border: none;
        }

        /* Hero section */
        .hero {
            background: linear-gradient(45deg, rgba(255, 0, 102, 0.8), rgba(255, 204, 0, 0.8)), url("public/compliant2.jpg") center top no-repeat;
            background-size: cover;
            color: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            animation: zoomIn 1s ease-in-out;
        }

        @media (min-width: 1025px) {
            .hero {
                background-attachment: fixed;
            }
        }

        @media (max-height: 640px) {
            .hero {
                height: 120vh;
            }
        }

        .hero h1 {
            font-size: 5rem;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease-in-out;
        }

        .hero p {
            font-size: 2rem;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease-in-out;
        }

        .btn-hero {
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            font-size: 18px;
            letter-spacing: 1.5px;
            display: inline-block;
            padding: 12px 36px;
            border-radius: 50px;
            transition: 0.3s;
            margin: 10px;
            border: 3px solid #fff;
            color: #fff;
            background: linear-gradient(45deg, #ff007a, #ffcc00);
            animation: pulse 1.5s infinite;
        }

        .btn-hero:hover {
            background: #fff;
            color: #ff007a;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-100px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(100px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.6);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        /* Features section */
        .features {
            padding: 60px 0;
            background: #1e1e1e;
        }

        .feature {
            text-align: center;
            padding: 20px;
            border: 2px solid #ff007a;
            border-radius: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
            background: #2c2c2c;
            margin-bottom: 20px;
            color: #fff;
        }

        .feature i {
            color: #ffcc00;
            margin-bottom: 10px;
            animation: bounce 1s infinite;
        }

        .feature h3 {
            font-size: 2rem;
            margin-bottom: 10px;
            animation: fadeInUp 1s ease-in-out;
        }

        .feature p {
            animation: fadeInUp 1.5s ease-in-out;
        }

        .feature:hover {
            transform: translateY(-15px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Executive section */
        .executive {
            padding: 60px 0;
            background-color: #333;
        }

        .executive .exec-member {
            text-align: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        .executive .exec-member img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            margin-bottom: 15px;
            animation: rotate 2s infinite linear;
        }

        .executive .exec-member h3 {
            font-size: 2rem;
            margin-bottom: 10px;
            animation: fadeInUp 1s ease-in-out;
        }

        .executive .exec-member p {
            animation: fadeInUp 1.5s ease-in-out;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /* Contact section */
        .contact {
            background-color: #2c2c2c;
            padding: 60px 0;
            color: #f8f9fa;
        }

        .contact h2 {
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-in-out;
        }

        .contact p {
            margin-bottom: 40px;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .contact form .form-control {
            margin-bottom: 20px;
            background: #333;
            color: #fff;
            border: 1px solid #ff007a;
            animation: fadeInUp 2s ease-in-out;
        }

        .contact .btn-primary {
            background: linear-gradient(45deg, #ff007a, #ffcc00);
            border: none;
            animation: fadeInUp 2.5s ease-in-out;
        }

        /* Footer */
        .footer {
            background-color: #1e1e1e;
            color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">QuickComplaints</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="admin_login.php">Admin Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <div class="container text-center">
            <h1>Welcome to the Complaint System</h1>
            <p>Your voice matters. Submit your complaints easily and efficiently.</p>
            <a href="complaint.php" class="btn btn-hero">Submit a Complaint</a>
        </div>
    </header>

    <!-- Features Section -->
    <!-- <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-bolt fa-4x"></i>
                        <h3>Fast and Easy</h3>
                        <p>Submit your complaints quickly and effortlessly.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-shield-alt fa-4x"></i>
                        <h3>Secure</h3>
                        <p>Your information is protected and secure.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-headset fa-4x"></i>
                        <h3>Support</h3>
                        <p>We are here to help you 24/7.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

   
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2024 QuickComplaints. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script>
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });

        // Smooth scrolling for navigation links
        $('.nav-link').on('click', function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {
                    window.location.hash = hash;
                });
            }
        });
    </script> -->
</body>

</html>
