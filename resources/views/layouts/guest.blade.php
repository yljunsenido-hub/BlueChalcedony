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
<body class="font-sans text-gray-900 antialiased" style="background-image: url('{{ asset('images/background.png') }}'); background-size: cover; background-position: center; min-height: 100vh;">

    <div class="flex flex-col min-h-screen">

        <!-- Content -->
        <main class="flex-grow flex items-center justify-center p-6">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-blue-900 text-white py-4 w-full">
            <div class="flex justify-between items-center px-5 text-sm w-full max-w-screen-xl mx-auto">
                <div>&copy; {{ date('Y') }} Blue Chalcedony Quartz</div>
                <div>Terms & Conditions</div>
            </div>
        </footer>

    </div>

</body>
</html>
