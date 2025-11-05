@extends('layouts.app')

@section('content')
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner_content">
                        <h3 class="text-uppercase">Hell0</h3>
                        <h1 class="text-uppercase">I am <i>Drumil</i></h1>
                        <h5 class="text-uppercase">Data Analytics</h5>
                        <div class="d-flex align-items-center">
                            <a class="primary_btn" href="#"><span>Hire Me</span></a>
                            <a class="primary_btn tr-bg" href="#"><span>Get CV</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_right_img">
                        <dotlottie-wc
                            src="{{ asset('lottie/bg8jAuMuEO.lottie') }}"
                            style="width: 300px;height: 300px"
                            autoplay
                            loop></dotlottie-wc>
                            <!-- <img src="{{ asset('img/profile_pic.png') }}" alt="Profile Picture"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection