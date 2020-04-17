<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <base href="{{ asset('') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Anh Tai">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="backend/css/font-face.css" rel="stylesheet" media="all">
    <link href="backend/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="backend/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="backend/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="backend/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="backend/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="backend/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="backend/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="backend/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="backend/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="backend/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="backend/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="backend/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @include('backend.header-mobile')
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include('backend.menu-sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('backend.header-desktop')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            @yield('main')
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="backend/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="backend/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="backend/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="backend/vendor/slick/slick.min.js">
    </script>
    <script src="backend/vendor/wow/wow.min.js"></script>
    <script src="backend/vendor/animsition/animsition.min.js"></script>
    <script src="backend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="backend/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="backend/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="backend/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="backend/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="backend/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="backend/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="backend/js/main.js"></script>
    @yield('script')

</body>

</html>
<!-- end document-->
