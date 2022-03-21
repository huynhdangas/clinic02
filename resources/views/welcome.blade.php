@extends('layouts.app')

@section('content')
<div class="container">

<!-- header -->
    <header>
        <div class="banner">
            <img src="/banner/bannerheader.jpg" alt="" width="100%">
        </div>
    </header>

<!-- end header -->


<!-- social -->
    <div class="row" style="margin-top: 50px;">
    <div class="col-xl-3 col-md-6">
        <div class="card social-card">
                <div class="card-body text-center">
                    <h2 class="text-facebook mb-20"><i class="fab fa-facebook-f"></i></h2>
                    <h3 class="text-facebook fw-700">6,750</h3>
                    <p>Likes</p>
                    <p class="mb-0 mt-15"><i class="fas fa-caret-up mr-10 f-18 text-green"></i>223 from last 7 days</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card social-card">
                <div class="card-body text-center">
                    <h2 class="text-twitter mb-20"><i class="fab fa-twitter"></i></h2>
                    <h3 class="text-twitter fw-700">9,752</h3>
                    <p>Tweets</p>
                    <p class="mb-0 mt-15"><i class="fas fa-caret-up mr-10 f-18 text-green"></i>623 from last 7 days</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card social-card">
                <div class="card-body text-center">
                    <h2 class="text-dribbble mb-20"><i class="fab fa-dribbble"></i></h2>
                    <h3 class="text-dribbble fw-700">8,752</h3>
                    <p>Followers</p>
                    <p class="mb-0 mt-15"><i class="fas fa-caret-up mr-10 f-18 text-green"></i>623 from last 7 days</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card social-card">
                <div class="card-body text-center">
                    <h2 class="text-linkedin mb-20"><i class="fab fa-linkedin-in"></i></h2>
                    <h3 class="text-linkedin fw-700">952</h3>
                    <p>Followers</p>
                    <p class="mb-0 mt-15"><i class="fas fa-caret-down mr-10 f-18 text-red"></i>98 from last 7 days</p>
                </div>
            </div>
        </div>
    </div>
<!-- end social -->


<!-- info -->
    <!-- <div class="row" style="margin-top: 50px;">
        <div class="col-md-5">
            <img src="/banner/online-medicine-concept_160901-152.jpg" style="border:1px solid #ccc" class="img-fluid" width="400" />
        </div>
        <div class="col-md-7">
            <h2 style="color: #007bff; font-weight: 700;">Create an account and Book your appointment</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="mt-5">
                <a href="{{url('/register')}}"><button class="btn btn-primary">Register as Patient</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Login</button></a>
            </div>
        </div>
    </div> -->
    <hr>

<!-- end info -->

<!-- datepicker -->
<find-doctor></find-doctor>

</div>
@endsection
