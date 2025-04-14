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

    <!-- Main Content -->
    <div class="min-h-screen w-full transition-all duration-300 ease-in-out">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="p-6 ml-64">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
