@extends('layout.master')

@section('title', 'View Project')

@section('content')
<div class="project-detail">
    <h1>View Project</h1>
    
    <!-- Carousel of Screenshots -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel"data-bs-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/Views.png') }}" class="d-block w-100" alt="View 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Views1.png') }}" class="d-block w-100" alt="View 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Views2.png') }}" class="d-block w-100" alt="View 3">
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

    <p>This project demonstrates the implementation of the View system in Laravel using Blade templates. The "Fixed" website serves as an example of how Blade views help separate the presentation logic from business logic. This project emphasizes the use of Laravel's Blade templating engine to render views efficiently and maintain reusable code.</p>

    <!-- Features -->
    <h3>Key Features</h3>
    <ul class="project-features">
        <li>Implemented dynamic views using Blade templating engine</li>
        <li>Separated business logic from presentation logic</li>
        <li>Reusable components like header and footer</li>
        <li>Incorporated data binding from controllers to views</li>
    </ul>

    <!-- Technologies Used -->
    <div class="tech-stack">
        <h3>Technologies Used</h3>
        <ul>
            <li>Laravel</li>
            <li>Blade Templating</li>
            <li>PHP</li>
            <li>HTML5, CSS3</li>
        </ul>
    </div>

    <!-- Demo Links -->
    <a href="https://github.com/switch-ka/my-laravel-project.git" class="btn demo-link" target="_blank">View on GitHub</a>
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
