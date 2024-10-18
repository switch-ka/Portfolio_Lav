@extends('layout.master')

@section('title', 'Lab 4: Middleware')

@section('content')
    <div class="lab-content">
        <h1 class="lab-title">Lab 4: Middleware</h1>
        <p class="lab-description"><strong>Description:</strong> This lab covers understanding Middleware in Laravel and how it controls the flow of HTTP requests within your application.</p>

        <!-- Summary Section -->
        <section class="lab-section">
            <h2 class="section-title">Summary</h2>
            <p class="section-description">
                Middleware acts as a filter for HTTP requests in Laravel applications. It provides a convenient mechanism for inspecting and modifying requests before they reach your application’s controller. Middleware can be used for a variety of tasks such as authentication, logging, and handling CORS (Cross-Origin Resource Sharing).
            </p>
        </section>

        <!-- Detailed Overview Section -->
        <section class="lab-section">
            <h2 class="section-title">Detailed Overview</h2>
            <p class="section-description">
                Laravel's middleware sits between the user and the application’s controller, allowing developers to apply logic to incoming requests and outgoing responses. Middleware can either allow the request to proceed to the controller or terminate it if the request does not meet certain conditions (e.g., authentication).
            </p>

            <h3 class="sub-section-title">1. Creating Middleware</h3>
            <p class="section-description">
                Middleware can be generated using Laravel’s Artisan command:
            </p>
            <pre>
                php artisan make:middleware CheckAge
            </pre>
            <p class="section-description">
                This will generate a new middleware file in the `app/Http/Middleware` directory. Middleware typically contains two methods: `handle()` and `terminate()`. The `handle()` method is used to filter requests and responses.
            </p>

            <h3 class="sub-section-title">2. Registering Middleware</h3>
            <p class="section-description">
                Middleware needs to be registered with your application to take effect. This can be done globally (for all requests) by adding it to the `$middleware` array in `app/Http/Kernel.php`, or it can be assigned to specific routes by registering it in the `$routeMiddleware` array.
            </p>

            <h3 class="sub-section-title">3. Applying Middleware to Routes</h3>
            <p class="section-description">
                Once registered, middleware can be applied to routes using the `middleware` method in your routes file:
            </p>
            <pre>
                Route::get('/profile', function () {
                    // Only authenticated users may enter...
                })->middleware('auth');
            </pre>
            <p class="section-description">
                This ensures that only authenticated users can access the profile page.
            </p>

            <h3 class="sub-section-title">4. Custom Middleware Logic</h3>
            <p class="section-description">
                Middleware allows developers to customize how requests are handled before they reach the controller. For example, you can use middleware to check if the user is an admin, log all incoming requests, or apply rate-limiting to certain routes.
            </p>
            <pre>
                public function handle($request, Closure $next)
                {
                    if ($request->age < 18) {
                        return redirect('home');
                    }

                    return $next($request);
                }
            </pre>

            <h3 class="sub-section-title">5. Global vs. Route Middleware</h3>
            <p class="section-description">
                Middleware can be applied globally (to all requests) or on specific routes. Global middleware is defined in the `Kernel.php` file under the `$middleware` array, while route middleware is applied on a per-route basis using the `middleware()` method.
            </p>
        </section>

        <!-- Conclusion Section -->
        <section class="lab-section">
            <h2 class="section-title">Conclusion</h2>
            <p class="section-description">
                Middleware is an essential part of Laravel applications, allowing developers to apply logic at various stages of the request lifecycle. By using middleware, developers can handle tasks such as authentication, logging, and filtering in a clean, reusable manner, ensuring that requests are properly processed before reaching the application’s business logic.
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
