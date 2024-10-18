@extends('layout.master')

@section('title', 'My Portfolio')

@section('content')
<div class="portfolio-page">

    <!-- Intro Section -->
    <section class="intro">
        <h1>Judges a book by its cover...</h1>
        <p class="job-title">I’m a BSIT College Student.</p>
        <p class="description">Crafting solutions and creating seamless experiences through clean and efficient code.</p>
    </section>

    <!-- Work Experience Section -->
    <section class="work-experience" id="work-experience">
        <h2>Project Work Experience</h2>
        <div class="experience-grid">
            <!-- Work Experience Cards with Direct Links -->
            <div class="experience-item">
                <a href="/labs/1">
                    <h3>Views</h3>
                    <p>This project demonstrates the use of Laravel's Blade templating system to create dynamic and reusable views.</p>
                </a>
            </div>
            <div class="experience-item">
                <a href="/labs/2">
                    <h3>Routes</h3>
                    <p>This project focuses on defining and managing routes within a Laravel application.</p>
                </a>
            </div>
            <div class="experience-item">
                <a href="/labs/3">
                    <h3>Layouts</h3>
                    <p>"This project explores the creation of a master layout in Laravel using Blade. </p>
                </a>
            </div>
            <div class="experience-item">
                <a href="/labs/4">
                    <h3>Middleware</h3>
                    <p>This project involves implementing custom middleware in Laravel.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects" id="projects">
        <h2>Projects (Click to View)</h2>
        <div class="project-grid">
            <!-- Project Cards -->
            <!-- Project Cards -->
<div class="project-item">
    <a href="{{ url('/project/view') }}">
        <img src="{{ asset('images/Views.png') }}" alt="Project 1 Image">
        <h3>View Proj</h3>
    </a>
</div>
<div class="project-item">
    <a href="{{ url('/project/route') }}">
        <img src="{{ asset('images/Routes.png') }}" alt="Project 2 Image">
        <h3>Route Proj</h3>
    </a>
</div>
<div class="project-item">
    <a href="{{ url('/project/layout') }}">
        <img src="{{ asset('images/Layouts.png') }}" alt="Project 3 Image">
        <h3>Layout Proj</h3>
    </a>
</div>
<div class="project-item">
    <a href="{{ url('/project/middleware') }}">
        <img src="{{ asset('images/Middleware.png') }}" alt="Project 4 Image">
        <h3>Middleware Proj</h3>
    </a>
</div>

        </div>
    </section>

    <!-- Social Media Section -->
    <section class="contact" id="contact">
        <h2>Get in Touch</h2>
        <p>I’m always interested in hearing about new projects and opportunities.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
        </div>
    </section>

</div>
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

@endsection
