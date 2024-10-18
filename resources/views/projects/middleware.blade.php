@extends('layout.master')

@section('title', 'Middleware Project')

@section('content')
<div class="project-detail">
    <h1>Middleware Project</h1>
    
    <!-- Carousel of Screenshots -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/Middleware.png') }}" class="d-block w-100" alt="Middleware Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Middleware1.png') }}" class="d-block w-100" alt="Middleware Image 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Middleware2.png') }}" class="d-block w-100" alt="Middleware Image 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Middleware3.png') }}" class="d-block w-100" alt="Middleware Image 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <p>This project demonstrates the implementation of middleware in Laravel. It includes age verification middleware and custom request logging middleware. The system ensures that users meet specific age criteria before accessing certain pages, and all HTTP requests are logged for auditing purposes.</p>

    <!-- Features -->
    <h3>Key Features</h3>
    <ul class="project-features">
        <li>Implemented custom age verification middleware (CheckAge middleware)</li>
        <li>Logging all HTTP requests with timestamp, URL, and method (LogRequests middleware)</li>
        <li>Redirecting users to an "Access Denied" page if age conditions are not met</li>
        <li>Global and route-specific middleware application</li>
    </ul>

    <!-- Technologies Used -->
    <div class="tech-stack">
        <h3>Technologies Used</h3>
        <ul>
            <li>Laravel</li>
            <li>PHP</li>
            <li>Middleware</li>
            <li>Blade Templates</li>
        </ul>
    </div>

    <!-- Demo Links -->
    <a href="https://github.com/switch-ka/middleware-webdev.git" class="btn demo-link" target="_blank">View on GitHub</a>
</div>

<!-- Custom CSS for design consistency -->
<style>
    .project-detail {
        max-width: 1200px;
        margin: auto;
        padding: 3rem;
        text-align: center;
        color: #fff;
    }

    .project-detail img {
        max-width: 100%;
        border-radius: 10px;
        margin-bottom: 2rem;
        transition: transform 0.3s ease-in-out;
    }

    .carousel-item {
        transition: transform 0.5s ease-in-out; /* Controls slide transition speed */
    }

    .project-detail img:hover {
        transform: scale(1.05);
    }

    .project-detail p {
        font-size: 1.2rem;
        color: #bbb;
        margin-bottom: 2rem;
    }

    .project-features li {
        transition: color 0.3s;
    }

    .project-features li:hover {
        color: #e94560;
    }

    .tech-stack ul, .project-features ul {
        list-style: none;
        padding: 0;
    }

    .btn {
        margin: 1rem;
        padding: 0.5rem 2rem;
        background-color: #e94560;
        color: #fff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn:hover {
        background-color: #ff6f91;
    }
</style>
@endsection
