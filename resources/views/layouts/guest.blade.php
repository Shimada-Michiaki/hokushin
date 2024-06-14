<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(Auth::check())
        <meta name="logged-in" content="true">
        <meta name="user-name" content="{{ Auth::user()->name }}">
        <meta name="user-roles" content="{{ Auth::user()->getRoleNames()->join(',') }}">
    @else
        <meta name="logged-in" content="false">
    @endif

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/js/tabControl.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-vh-100 bg-light d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>
