@extends('layout.master')

@section('title', 'Lab 3: Layouts')

@section('content')
    <div class="lab-content">
        <h1 class="lab-title">Lab 3: Layouts</h1>
        <p class="lab-description"><strong>Description:</strong> This lab covers understanding Laravel Layouts and how they allow for reusable and modular templates in web applications.</p>

        <!-- Summary Section -->
        <section class="lab-section">
            <h2 class="section-title">Summary</h2>
            <p class="section-description">
                In Laravel, layouts allow developers to define a common structure or template for their applications pages. This helps in maintaining consistency across multiple views, reduces code duplication, and makes it easier to manage complex UIs. Using the Blade templating engine, layouts can be extended by various views, making it easier to maintain and scale large applications.
            </p>
        </section>

        <!-- Detailed Overview Section -->
        <section class="lab-section">
            <h2 class="section-title">Detailed Overview</h2>
            <p class="section-description">
                Laravel's Blade provides an easy way to define layouts that can be extended across multiple views. The layout typically includes common elements like headers, footers, and navigation bars, and the specific content for each page is injected into the layout.
            </p>

            <h3 class="sub-section-title">1. Defining a Layout</h3>
            <p class="section-description">
                A layout file is stored in the `resources/views/layouts` directory. The layout includes the common HTML structure, while the `yield` directive defines placeholders where content from other views will be injected.
            </p>
            <pre>
                <!-- Example layout file (master.blade.php) -->
                &lt;!DOCTYPE html&gt;
                &lt;html&gt;
                &lt;head&gt;
                    &lt;title&gt;@ yield('title')&lt;/title&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    &lt;header&gt;
                        &lt;!-- Common header content here --&gt;
                    &lt;/header&gt;

                    &lt;div class="content"&gt;
                        @ yield('content')
                    &lt;/div&gt;

                    &lt;footer&gt;
                        &lt;!-- Common footer content here --&gt;
                    &lt;/footer&gt;
                &lt;/body&gt;
                &lt;/html&gt;
            </pre>

            <h3 class="sub-section-title">2. Extending Layouts</h3>
            <p class="section-description">
                Blade's `extends` directive allows views to inherit the layout's structure. The `section` directive is used to define the content for specific sections in the layout, and the content is injected into the corresponding `yield` directives in the layout.
            </p>
            <pre>
                <!-- Example view extending a layout -->
                @ extends('layout.master')

                @ section('title', 'Home Page')

                @ section('content')
                    &lt;h1&gt;Welcome to the Home Page&lt;/h1&gt;
                    &lt;p&gt;This is the content of the home page.&lt;/p&gt;
                @ endsection
            </pre>

            <h3 class="sub-section-title">3. Blade Components</h3>
            <p class="section-description">
                In addition to layouts, Blade components allow for reusable UI elements that can be shared across views. Components can be thought of as smaller, self-contained layout files that can be embedded into views with the `component` directive.
            </p>

            <h3 class="sub-section-title">4. Using include for Reusable Views</h3>
            <p class="section-description">
                Blade's `include` directive allows you to include smaller, reusable view files within a larger layout. This is useful for elements like headers, footers, or any part of the page that is repeated across multiple views.
            </p>
            <pre>
                <!-- Including a reusable header component -->
                @ include('partials.header')
            </pre>
        </section>

        <!-- Conclusion Section -->
        <section class="lab-section">
            <h2 class="section-title">Conclusion</h2>
            <p class="section-description">
                Mastering layouts in Laravel is key to building scalable, maintainable web applications. By using Blades `extends`, `section`, and `include` directives, developers can create modular, reusable templates that make managing complex UIs much simpler.
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
