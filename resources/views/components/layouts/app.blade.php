<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO -->
    <meta name="description"
        content="Unlock your potential with personalized language learning. Join our early access to be one of the first to experience Fluensy!">
    <meta name="keywords" content="language learning, personalized learning, early access, fluensy">
    <meta name="author" content="Fluensy">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="Fluensy | Personalized Language Learning">
    <meta property="og:description"
        content="Unlock your potential with personalized language learning. Join our early access to be one of the first to experience Fluensy!">
    <meta property="og:image" content="{{ asset('logo.svg') }}">
    <meta property="og:url" content="{{ url('/') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@fluensy">
    <meta name="twitter:title" content="Fluensy | Personalized Language Learning">
    <meta name="twitter:description"
        content="Unlock your potential with personalized language learning. Join our early access to be one of the first to experience Fluensy!">
    <meta name="twitter:image" content="{{ asset('logo.svg') }}">
    <meta name="twitter:url" content="{{ url('/') }}">

    <!-- Title -->
    <title>Fluensy | Personalized Language Learning</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('logo.svg') }}" type="image/svg+xml">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="py-12 flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="max-w-md w-full p-8 bg-white shadow-lg rounded-lg mb-8">
        {{ $slot }}
    </div>
    <livewire:components.footer />
</body>

</html>
