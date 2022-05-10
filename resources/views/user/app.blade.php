<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sona Diagnostics - Index</title>
    <meta content="A leading blood test laboratory of Ranchi, Jharkhand Sona Diagnostics now makes it easy and convenient for patients to check their lab test results online with just a couple of clicks." name="description">
    <meta content="sona diagnostics, pathology lab, diagnostics center, blood test, diagnostics center india, path lab, diagnostics services, pathology services, pathology service Ranchi" name="keywords">

    <!-- Favicons -->
    <link href="website/assets/img/favicon.png" rel="icon">
    <link href="website/assets/img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="website/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="website/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="website/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="website/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="website/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="website/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="website/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="website/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="website/assets/css/style.css" rel="stylesheet">
    <link href="website/assets/css/auto1.css" rel="stylesheet">
    <link href="assets/css/select2.min.css" rel="stylesheet" />
    <style>
        
    </style>
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="align-items-center d-none d-md-flex">
                <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 7PM
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone"></i> Call us now &nbsp;<a href="tel:+918294566811" class="callNow">+91 8294566811</a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="/" class="logo me-auto"><img src="website/assets/img/logo1.png" alt=""></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="/#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="/#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="/#departments">Departments</a></li>
                    <li><a class="nav-link scrollto" href="/packages">Packages</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                    <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <!-- User Login buttons -->
            @if(Route::has('login'))
            @auth
            <!-- My Appointments -->
            <a href="{{ url('myappointment') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline">My</span>
                Appointment</a> 
            <!-- My Appointments -->
            <x-app-layout>
            </x-app-layout>
            @else
            <a href="{{Route('login')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline"><i class="fa fa-user"></i></span>
            Login/ Register</a>
            <!-- User Login buttons -->
            @endauth
            @endif

        </div>
    </header><!-- End Header -->

    @yield('page-content')
    
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Sona Diagnostics</h3>
                            <p>
                                Khushwaha Complex, near life care hospital <br>
                                Booty More Bariyatu Road, Ranchi<br><br>
                                <strong>Phone:</strong> <a href="tel:+918294566811">+91 8294566811</a><br>
                                <strong>Email:</strong> <a href="mailto:sonadiagnosticsranchi@gmail.com">sonadiagnosticsranchi@gmail.com</a><br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">WHOLE BODY CT SCAN</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">DIGITAL X-RAY</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">OPG</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">ULTRA SONOGRAPHY</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">EEG</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Enter your email to subscribe to our newsletter</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Sona Diagnostics</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a target="_blank" href="http://framework-futuristic.com/">Framework Futuristic Pvt. Ltd.</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/js/jquery-3.5.1.min.js"></script> 
    <script src="assets/js/select2.min.js"></script>
    <script src="website/assets/vendor/purecounter/purecounter.js"></script>
    <script src="website/assets/vendor/aos/aos.js"></script>
    <script src="website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="website/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="website/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="website/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="website/assets/js/main.js"></script>

    @yield('page-script')
    <script>
        var $select2 = $(".select2");
        $select2.select2();
    </script>

</body>

</html>
