@extends('layout.master')

@section('title', 'Lab 1: Views')

@section('content')
    <div class="lab-content">
        <h1 class="lab-title">Lab 1: Views</h1>
        <p class="lab-description"><strong>Description:</strong> This lab covers understanding Laravel Views and how they integrate with the framework to handle the presentation layer of a web application.</p>

        <!-- Summary Section -->
        <section class="lab-section">
            <h2 class="section-title">Summary</h2>
            <p class="section-description">
                In Laravel, Views are a crucial component of the MVC (Model-View-Controller) architecture. They are responsible for presenting the user interface and separating business logic from presentation logic. By keeping views separate, developers can create clean, modular code that is easy to maintain.
            </p>
        </section>

        <!-- Detailed Overview Section -->
        <section class="lab-section">
            <h2 class="section-title">Detailed Overview</h2>
            <p class="section-description">
                Laravel's Blade templating engine enhances this separation by providing features like template inheritance, components, and layout extensions, allowing developers to create dynamic, reusable view templates. Blade also integrates PHP logic directly into HTML using simple and intuitive syntax, which reduces complexity and ensures maintainable code.
            </p>

            <h3 class="sub-section-title">1. Understanding Views</h3>
            <p class="section-description">
                Views in Laravel are stored in the `resources/views` directory. They are simple PHP files that Laravel serves to the user. While standard PHP code can be used in views, Blade is Laravel's templating engine that offers additional functionality like template inheritance and reusable components.
            </p>

            <h3 class="sub-section-title">2. Passing Data to Views</h3>
            <p class="section-description">
                Laravel makes it simple to pass data from the controller to the view using the `with()` method or directly through an array of data. This ensures that views have access to the necessary data without mixing logic into the presentation.
            </p>

            <h3 class="sub-section-title">3. Blade Directives</h3>
            <p class="section-description">
                Blade provides several useful directives like "if", "foreach", and "include", which simplify the integration of PHP logic into views. These directives make it easy to handle conditions, loops, and include partial views across the application.
            </p>

            <h3 class="sub-section-title">4. Blade Components and Slots</h3>
            <p class="section-description">
                Blade components allow for the creation of reusable UI elements. By passing data and content into components using slots, Laravel provides a powerful mechanism for reusing code and maintaining consistency throughout the application.
            </p>
        </section>

        <!-- Conclusion Section -->
        <section class="lab-section">
            <h2 class="section-title">Conclusion</h2>
            <p class="section-description">
                By mastering Laravel views and Blade, developers can build maintainable, reusable, and dynamic front-end pages while keeping the back-end logic separate. This lab demonstrates the power and flexibility of Blade and how it improves development speed while maintaining code quality.
            </p>
        </section>
    </div>

    <!-- Custom CSS for this view to ensure design consistency -->
    <style>
        .lab-content {
            max-width: 1200px;
            margin: auto;
            padding: 3rem 1rem;
            color: #fff;
        }

        .lab-title {
            font-size: 3rem;
            color: #e94560;
            margin-bottom: 1rem;
            text-align: center;
        }

        .lab-description {
            font-size: 1.2rem;
            color: #bbb;
            text-align: center;
            margin-bottom: 2rem;
        }

        .lab-section {
            margin-bottom: 3rem;
        }

        .section-title {
            font-size: 2rem;
            color: #e94560;
            position: relative;
            margin-bottom: 1rem;
            text-align: center;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 100px;
            height: 3px;
            background-color: #e94560;
            margin: 1rem auto 0;
        }

        .sub-section-title {
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 1rem;
        }

        .section-description {
            font-size: 1rem;
            color: #bbb;
            line-height: 1.7;
        }
    </style>
@endsection
