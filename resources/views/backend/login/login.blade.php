<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

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
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="backend/#">
                                <img src="backend/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            @if (session('thongbao'))
                            <div class="alert alert-danger">
                                <strong>{{ session('thongbao') }}</strong>
                            </div>
                            @endif
                            <form action="{{ route('postLogin') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                    @if ($errors->has('email'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </div>
                                    @endif
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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

</body>

</html>
<!-- end document-->