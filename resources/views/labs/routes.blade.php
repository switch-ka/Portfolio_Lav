@extends('layout.master')

@section('title', 'Lab 2: Routes')

@section('content')
    <div class="lab-content">
        <h1 class="lab-title">Lab 2: Routes</h1>
        <p class="lab-description"><strong>Description:</strong> This lab covers understanding Laravel Routes and how they help manage and direct HTTP requests within the application.</p>

        <!-- Summary Section -->
        <section class="lab-section">
            <h2 class="section-title">Summary</h2>
            <p class="section-description">
                In Laravel, routing is the process of defining URL patterns and linking them to specific controllers or actions. Routes determine how the application responds to various HTTP requests (GET, POST, PUT, DELETE, etc.). With Laravel’s routing system, developers can efficiently manage incoming requests and direct them to appropriate responses.
            </p>
        </section>

        <!-- Detailed Overview Section -->
        <section class="lab-section">
            <h2 class="section-title">Detailed Overview</h2>
            <p class="section-description">
                Laravel routes are defined in the `routes/web.php` file, where developers can associate HTTP requests with specific controllers or closures. Routes can accept parameters, have middleware applied to them, and be grouped for better organization.
            </p>

            <h3 class="sub-section-title">1. Basic Routing</h3>
            <p class="section-description">
                Laravel’s basic routes are simple and intuitive. By defining a route and linking it to a function or controller, you determine how the application responds to a specific URI.
            </p>
            <pre>
                Route::get('/example', function () {
                    return 'This is an example route';
                });
            </pre>

            <h3 class="sub-section-title">2. Route Parameters</h3>
            <p class="section-description">
                Route parameters allow you to capture values from the URL and pass them into the route’s associated function or controller. Parameters can be required or optional.
            </p>
            <pre>
                // Required parameter
                Route::get('/user/{id}', function ($id) {
                    return "User ID: " . $id;
                });

                // Optional parameter
                Route::get('/user/{name?}', function ($name = 'Guest') {
                    return "User Name: " . $name;
                });
            </pre>

            <h3 class="sub-section-title">3. Named Routes</h3>
            <p class="section-description">
                Named routes allow you to refer to specific routes by name rather than their URL, making it easier to manage URLs in your application and change them globally if needed.
            </p>
            <pre>
                // Defining a named route
                Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

                // Using a named route in a view or redirect
                return redirect()->route('dashboard');
            </pre>

            <h3 class="sub-section-title">4. Route Grouping and Middleware</h3>
            <p class="section-description">
                Route groups allow you to apply middleware or common attributes to multiple routes simultaneously. Middleware can protect routes by controlling access or modifying request data before it reaches the controller.
            </p>
            <pre>
                Route::middleware(['auth'])->group(function () {
                    Route::get('/profile', [ProfileController::class, 'show']);
                    Route::get('/dashboard', [DashboardController::class, 'index']);
                });
            </pre>
        </section>

        <!-- Conclusion Section -->
        <section class="lab-section">
            <h2 class="section-title">Conclusion</h2>
            <p class="section-description">
                Understanding and mastering routing in Laravel is crucial for building robust web applications. By organizing routes efficiently and leveraging features like named routes, route groups, and middleware, developers can manage complex applications with ease.
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
