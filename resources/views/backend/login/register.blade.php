<!doctype html>
<html lang="en">

<!-- Mirrored from vetra.laborasyon.com/demos/default/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jun 2022 17:30:09 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Jossgift | E-Commerce Go On</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('fontend/jossgift_logo.jpg')}}"/>

    <!-- Themify icons -->
    <link rel="stylesheet" href="{{asset('fontend/main/dist/icons/themify-icons/themify-icons.css')}}" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="{{asset('fontend/main/dist/css/app.min.css')}}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="auth">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->


    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="ltf-block-logo d-block d-lg-none text-center text-lg-start">
                                    <img width="120" src="{{asset('fontend/jossgift_logo.jpg')}}" alt="logo">
                                </div>
                                <div class="my-5 text-center text-lg-start">
                                    <h1 class="display-8">Create Account</h1>
                                </div>
                                @include('backend.admin.includes.massage')
                                <form action="{{route('post.registration')}}" method="post" class="mb-5">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" placeholder="Enter fullname" autofocus>
                                    </div>
                                    <input type="hidden" name="is_admin" value="0">
                                    <input type="hidden" name="user_type">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="confirm_password" placeholder="Re-enter password">
                                    </div>
                                    <input type="hidden" name="is_admin" value="0">
                                    <input type="hidden" name="user_type" value="1">
                                    <div class="text-center text-lg-start">
                                        <button class="btn btn-primary">Sign Up</button>
                                    </div>
                                </form>
                                
                                <p class="text-center d-block d-lg-none mt-5 mt-lg-0">
                                    Don't have an account? <a href="#">Log In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-none d-lg-flex border-start align-items-center justify-content-between flex-column text-center">
                        <div class="logo">
                            <img width="250" src="{{asset('fontend/jossgift_logo.jpg')}}" alt="logo">
                        </div>
                        <div>
                            <h3 class="fw-bold">Welcome to Jossgift!</h3>
                            <p class="lead my-5">Do you already have an account?</p>
                            <a href="{{route('login')}}" class="btn btn-primary">Log In</a>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Reserved By Jossgift</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Bundle scripts -->
<script src="{{asset('fontend/main/libs/bundle.js')}}"></script>

<!-- Main Javascript file -->
<script src="{{asset('fontend/main/dist/js/app.min.js')}}"></script>
</body>

<!-- Mirrored from vetra.laborasyon.com/demos/default/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jun 2022 17:30:09 GMT -->
</html>
