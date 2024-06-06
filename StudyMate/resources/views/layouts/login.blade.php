<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
</head>

<body>

    @if (session('success'))
    <div class="d-flex justify-content-center align-items-center position-fixed top-0 start-0 w-100 h-100" style="z-index: 10000;">
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 50%;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @elseif (session('error'))
    <div class="d-flex justify-content-center align-items-center position-fixed top-0 start-0 w-100 h-100" style="z-index: 10000;">
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 50%;">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif





    <!-- Main container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100 position-relative">
        <div class="row border rounded-5 p-3 bg-white shadow box-area position-relative" style="height: 55vh;">
            <!-- Register Container -->
            <div class="col-md-6" style="z-index: 1;">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="row align-items-center">
                        <div class="header-text mb-4" style="padding-top:40px">
                            <h2>Hello, Register</h2>
                            <p>We are happy to have you back</p>
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" name="name" class="form-control form-control-lg bg-light fs-6" placeholder="Full Name" required>
                        </div>
                        <div class="input-group mb-2">
                            <input type="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" required>
                        </div>
                        <div class="input-group mb-2">
                            <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                        </div>
                        <div class="input-group mb-2">
                            <input type="password" name="password_confirmation" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password" required>
                        </div>
                        <div class="input-group mb-3 d-flex justify-content-between">
                            <div class="form-check">
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <button type="submit" class="btn btn-lg w-100 fs-6 register-btn">Register</button>
                        </div>
                        <div class="row">
                            <small>Already have an account? <a href="#" id="signin-link">Sign In</a></small>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Blue Screen Image -->
            <div class="col-md-6 bluescreen">
                <img src="{{ asset('img/Login-picture.png') }}" alt="Logo">
            </div>

            <!-- Login Container -->
            <div class="col-md-6" style="z-index: 1;">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row align-items-center">
                        <div class="header-text mb-5">
                            <h2 style="padding-top:50px">Hello, Again</h2>
                            <p>We are happy to have you back.</p>
                        </div>
                        <div class="input-group mb-4">
                            <input type="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" required>
                        </div>
                        <div class="input-group mb-2">
                            <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                        </div>
                        <div class="input-group mb-4 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="loginFormCheck">
                                <label for="loginFormCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="#">Forgot Password?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg login-btn w-100 fs-6">Login</button>
                        </div>
                        <div class="row">
                            <small id="signup-link">Don't have an account? <a href="#">Sign Up</a></small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('js/login.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Ypl8mW5y5va+2gfmbh5T6L5/3x8E" crossorigin="anonymous"></script>

</html>