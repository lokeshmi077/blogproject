<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin Panel</title>

    <!-- Favicons -->
    <link href="assets/img/logo.svg" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <style>
        .languageChange {
            position: absolute;
            top: 0;
            right: 0;
        }

        .toast-success {
            background-color: #ff6600 !important;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="quartasMain">
        <div class="login-grid">
            <div class="row w-100">
                <div class="col-lg-5">
                    <div class="leftDiv">
                        <div class="bg-login">
                            <div class="login-img">
                                <img src="assets/img/Group 1000007108.png" alt="image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 position-relative">
                    <div class="login-content-main">
                        <div class="login-content mx-3 w-100">
                            <h2 class="heading text-center">Login</h2>
                            <p class="heading text-center">Welcome back! Log in to your account.</p>

                            <form method="POST" action="{{route('login')}}" class="user">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Enter email address" required />
                                </div>

                                <div class="form-group position-relative">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" name="password" onkeypress="return event.key !== ' '" id="password" class="form-control form-control-user" placeholder="Enter password" required />
                                    <i class="toggle-password bi bi-eye-slash position-absolute" style="right: 15px; top: 50%; cursor: pointer;"></i>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small d-flex align-items-center">
                                        <input type="checkbox" name="remember" class="form-check-input custom-control-input" id="customCheck">
                                        <label class="custom-control-label ms-2" for="customCheck">Agree with terms and conditions</label>
                                    </div>
                                </div>

                                <div class="forgotPass mb-4">
                                    <a class="small" href="#">Forgot Password?</a>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block w-100">Sign In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(".toggle-password").click(function() {
            $(this).toggleClass("bi-eye bi-eye-slash");
            let input = $(this).parent().find("input");
            input.attr("type", input.attr("type") === "password" ? "text" : "password");
        });
    </script>

</body>

</html>
