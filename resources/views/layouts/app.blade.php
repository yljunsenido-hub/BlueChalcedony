<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased overflow-x-hidden w-full h-screen relative">

    <!-- Sidebar (fixed and floating) -->
    @include('components.sidebar')

    <!-- Navigation -->
    @include('layouts.navigation')

    <!-- Main Content -->
    <div class="min-h-screen w-full transition-all duration-300 ease-in-out">

        <!-- Page Content -->
        <main class="pl-72 pr-8 pt-8 pb-10" id="mainContent">
            {{ $slot }}
        </main>
        
    </div>
</body>

    <!-- JavaScript for AJAX navigation -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // Function to load content dynamically via AJAX
            function loadPage(url) {
                // Perform AJAX request to fetch the content
                fetch(url, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                })
                .then(response => response.text())
                .then(data => {
                    // Extract only the content that should be replaced
                    var tempDiv = document.createElement('div');
                    tempDiv.innerHTML = data;

                    // Find and replace the content inside <main> tag
                    var newContent = tempDiv.querySelector('#mainContent').innerHTML;
                    document.getElementById('mainContent').innerHTML = newContent;
                })
                .catch(error => {
                    console.error('Error loading page:', error);
                });
            }

            // Intercept all anchor clicks for AJAX loading
            document.querySelectorAll('a').forEach(anchor => {
                anchor.addEventListener('click', function (event) {
                    const href = this.getAttribute('href');

                    if (href && href !== '#') {
                        event.preventDefault();
                        window.history.pushState(null, '', href);
                        loadPage(href);
                    }
                });
            });

            // Handle back and forward browser navigation
            window.addEventListener('popstate', function () {
                loadPage(window.location.href);
            });

        });
    </script>

</body>
</html>