<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Farm Data Pod - Sign In</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon_io">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon_io/site.webmanifest">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feather.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper" style="width: 100%; height: 100vh; background-image: url('assets/img/pexels-feyza-tuğba-14650538.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="account-page">
            <div class="container">
                <h3 class="account-title" style="color: #fff;">Login</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <a href="index"><img src="assets/img/3.png" alt="Preadmin"></a>
                        </div>
                        <form id="login-form">
                            <div class="form-group form-focus">
                                <label class="focus-label">Username or Email</label>
                                <input class="form-control floating" type="text">
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">Password</label>
                                <input class="form-control floating" type="password">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-block account-btn" onclick="submit()">Login</button>
                            </div>
                            <div class="text-center">
                                <!-- <p>Don't have an account? <a href="forgot-password" style="color: #018E42;">Sign Up</a></p> -->
                                <a href="forgot-password">Forgot your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>