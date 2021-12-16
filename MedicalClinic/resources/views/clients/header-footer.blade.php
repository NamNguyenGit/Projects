<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Miracle Clinic</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/clients/assets/img/favicon.png" rel="icon">
    <link href="/clients/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="/clients/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/clients/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/clients/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/clients/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/clients/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/clients/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/clients/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/clients/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/clients/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/clients/assets/css/style.css" rel="stylesheet">



    @yield("css")
</head>

<body>
    <header id="header">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="{{route('home.index')}}">Miracle Clinic</a></h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link " href="{{route('home.index')}}">Home</a></li>
                    <li><a class="nav-link " href="{{route('aboutus.index')}}">About</a></li>
                    <li><a class="nav-link " href="{{route('userservice.index')}}">Services</a></li>
                    <li><a class="nav-link " href="{{route('userblog.index')}}">Blogs</a></li>
                    <li><a class="nav-link " href="{{route('usercontactus.index')}}">Contact</a></li>
                    <li><a class="nav-link " href="{{route('userdoctor.index')}}">Doctors</a></li>
                    @if(auth()->guard('patient')->check())
                    <li>Hi {{auth()->guard('patient')->user()->name}}</li>

                    <li><a class="nav-link " href="{{route('clients.profile')}}">Profile</a></li>
                    <li><a class="nav-link " href="{{route('clients.logout')}}">Log out</a></li>
                    @else
                    <li><a class="nav-link " href="{{route('userlogin.index')}}">Log in</a></li>
                    <li><a class="nav-link " href="{{route('clients.register')}}">Register</a></li>
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

            <a href="{{route('userappointment.index',0)}}" class="appointment-btn "><span class="d-none d-md-inline">Make an</span> Appointment</a>

        </div>
    </header>

    @yield('maincontent')

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Miracle Clinic</h3>
                        <p>
                            18 Hoang Quoc Viet <br>
                            Cau Giay, Ha Noi<br>
                            Viet Nam <br><br>
                            <strong>Phone:</strong> +0123456789 <br>
                            <strong>Email:</strong> Group4@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>About</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.index')}}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('aboutus.index')}}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('userservice.index')}}">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('userdoctor.index')}}">Doctors</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('usercontactus.index')}}">Contact us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('userappointment.index',0)}}">Appointment</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.645371896076!2d105.79814965060922!3d21.04687098591974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3d53a1c9d3%3A0x1f90abd2020b11ba!2zMTggSG_DoG5nIFF14buRYyBWaeG7h3QsIE5naMSpYSDEkMO0LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1633407139774!5m2!1svi!2s" width="600" height="450" style="border:0;width: 270px;height: 220px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <script src="/clients/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/clients/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/clients/assets/vendor/php-email-form/validate.js"></script>
    <script src="/clients/assets/vendor/purecounter/purecounter.js"></script>
    <script src="/clients/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/clients/assets/js/main.js"></script>

    @yield("js")

</body>

</html>