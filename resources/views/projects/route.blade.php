@extends('layout.master')

@section('title', 'Routes Project')

@section('content')
<div class="project-detail">
    <h1>Routes Project</h1>
    
    <!-- Carousel of Screenshots -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/Routes.png') }}" class="d-block w-100" alt="Routes 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Routes1.png') }}" class="d-block w-100" alt="Routes 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Routes2.png') }}" class="d-block w-100" alt="Routes 3">
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

    <p>This project showcases the implementation of routing in Laravel. It demonstrates how routes are used to navigate between different parts of the web application, from the homepage to various content sections, and how route parameters and middleware can be applied to manage access and dynamic content.</p>

    <!-- Features -->
    <h3>Key Features</h3>
    <ul class="project-features">
        <li>Defined basic and advanced routes in Laravel</li>
        <li>Implemented route parameters for dynamic content</li>
        <li>Applied middleware to control access to specific routes</li>
        <li>Incorporated route groups for efficient routing</li>
    </ul>

    <!-- Technologies Used -->
    <div class="tech-stack">
        <h3>Technologies Used</h3>
        <ul>
            <li>Laravel</li>
            <li>PHP</li>
            <li>HTML5, CSS3</li>
        </ul>
    </div>

    <!-- Demo Links -->
    <a href="https://github.com/switch-ka/WebDev-Lab2.git" class="btn demo-link" target="_blank">View on GitHub</a>
</div>

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
        transition: transform 0.5s ease-in-out; /* This controls the speed of the slide transition */
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
