<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Shar UI Clone')</title>

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    {{-- Extra page-specific styles --}}
    @stack('styles')
</head>
<body class="relative bg-white min-h-screen flex items-center justify-center font-sans overflow-hidden transition-colors duration-300">

    {{-- Main content --}}
    @yield('content')

    {{-- JavaScript --}}
    @vite('resources/js/app.js')

    {{-- Extra page-specific scripts --}}
    @stack('scripts')
</body>
</html>
