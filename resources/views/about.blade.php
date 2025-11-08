@extends('layouts.app')

@section('content')
<!--================ Start Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>About Me</h2>
                <div class="page_link">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/about') }}">About</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->

<!--================ Start About Area =================-->
<section class="about_area section_gap">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-5">
                <div class="about_img text-center">
                    <img class="img-fluid rounded-3 shadow" src="{{ asset('img/profile.png') }}" alt="Drumilkumar Patel">
                </div>
            </div>

            <div class="offset-lg-1 col-lg-6">
                <div class="main_title text-left">
                    <h2 class="mb-3">Hi, I'm <br><span>Drumilkumar Patel</span></h2>
                    <h5 class="text-muted mb-4">Software Developer | Marketer | Aspiring Data Scientist</h5>
                    <p class="mb-4">
                        I am a dedicated <strong>software developer</strong> with a strong background in <strong>web development</strong>, specializing in PHP, Laravel, and JavaScript.
                        My passion lies in creating scalable, efficient, and user-friendly applications that help businesses achieve their digital goals.
                    </p>
                    <p class="mb-4">
                        With a degree in <strong>Computer Science</strong> and hands-on experience in both <strong>software development</strong> and <strong>digital marketing</strong>,
                        I bring a unique combination of technical and strategic skills to every project. I’m currently advancing my expertise in <strong>AI and Data Science</strong>,
                        aiming to build intelligent systems that enhance real-world problem-solving.
                    </p>
                    <p class="mb-4">
                        I believe in constant learning, teamwork, and innovation. Whether it’s designing intuitive interfaces, optimizing backend performance,
                        or exploring machine learning applications, I strive to deliver quality and creativity in everything I do.
                    </p>
                    <a class="primary_btn" href="{{ asset('docs/Drumilkumar_Patel_CV.pdf') }}" download>
                        <span>Download CV</span>
                    </a>
                    <a class="primary_btn tr-bg ms-2" href="{{ url('/contact') }}">
                        <span>Contact Me</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End About Area =================-->
<!--================ Start Skills Area =================-->
<section class="skills_area section_gap bg-light position-relative">
    <div class="background-overlay"></div>
    <div class="container position-relative">
        <div class="main_title text-center mb-5">
            <h2 class="fw-bold text-dark">My Core Skills</h2>
            <p class="text-secondary">Technical expertise and tools I work with daily</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="skill-card text-center p-4">
                    <div class="icon mb-3">
                        <i class="fas fa-code fa-2x text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Languages</h5>
                    <p>PHP, JavaScript, Python, SQL</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="skill-card text-center p-4">
                    <div class="icon mb-3">
                        <i class="fas fa-laptop-code fa-2x text-success"></i>
                    </div>
                    <h5 class="fw-bold">Frameworks</h5>
                    <p>Laravel, Bootstrap, jQuery</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="skill-card text-center p-4">
                    <div class="icon mb-3">
                        <i class="fas fa-tools fa-2x text-warning"></i>
                    </div>
                    <h5 class="fw-bold">Tools</h5>
                    <p>Git, Composer, VS Code, MySQL</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="skill-card text-center p-4">
                    <div class="icon mb-3">
                        <i class="fas fa-brain fa-2x text-danger"></i>
                    </div>
                    <h5 class="fw-bold">Focus Areas</h5>
                    <p>AI, Data Science, Web Apps</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Skills Area =================-->


<!--================ Start Vision Area =================-->
<section class="vision_area section_gap">
    <div class="container text-center">
        <div class="main_title">
            <h2>My Vision</h2>
            <p>
                To leverage <strong>AI and data-driven insights</strong> to create innovative digital solutions that make technology smarter,
                businesses stronger, and human lives easier.
            </p>
        </div>
    </div>
</section>
<!--================ End Vision Area =================-->
@endsection