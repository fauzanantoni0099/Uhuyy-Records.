<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
        name="description"
        content="Theta is a bootstrap & laravel admin dashboard template"
    />
    <meta
        name="keywords"
        content="admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, crm, laravel admin, responsive, sass support, ui kits"
    />
    <meta name="author" content="Themesbox17" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <title>Uhuyy Records. - Login</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="img/core-img/dis6.jpg" />
    <!-- Start css -->
    <link
        href="back/assets/css/bootstrap.min.css"
        rel="stylesheet"
        type="text/css"
    />
    <link href="back/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="back/assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- End css -->
</head>
<body class="vertical-layout">
<!-- Start Containerbar -->
<div id="containerbar" class="containerbar authenticate-bg">
    <!-- Start Container -->
    <div class="container">
        <div class="auth-box login-box">
            <!-- Start row -->
            <div class="row no-gutters align-items-center justify-content-center">
                <!-- Start col -->
                <!-- Start end -->
                <!-- Start col -->
                <div class="col-md-6 col-lg-5">
                    <!-- Start Auth Box -->
                    <div class="auth-box-right">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h4 class="text-primary mb-4">Log in !</h4>
                                    <div class="form-group">
                                        <input
                                            id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-row mb-3">
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-checkbox">
                                                <input
                                                    type="checkbox"
                                                    class="custom-control-input"
                                                    id="rememberme"
                                                />
                                                <label
                                                    class="custom-control-label font-14"
                                                    for="rememberme"
                                                >Remember Me</label
                                                >
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="forgot-psw">
                                                <a
                                                    id="forgot-psw"
                                                    href="user-forgotpsw.html"
                                                    class="font-14"
                                                >Forgot Password?</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btn-success btn-lg btn-block font-18"
                                    >
                                        Log in Now
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- End Auth Box -->
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
    </div>
    <!-- End Container -->
</div>
<!-- End Containerbar -->
<!-- Start js -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<!-- End js -->
</body>
</html>


