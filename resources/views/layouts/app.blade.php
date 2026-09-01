<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SunSight Energy delivers premium solar panel systems, professional installation, and smart energy monitoring to help homes and businesses harness the power of the sun.">

    <title>@yield('title', 'SunSight Energy — Powering Futures with Solar')</title>

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="SunSight Energy: Solar Energy Solutions for Homes &amp; Businesses">
    <meta property="og:description" content="Power your future with SunSight Energy's premium solar panel systems, professional installation, and smart energy monitoring.">
    <meta property="og:url" content="{{ url('/') }}">

    <!-- Theme init: run before paint to prevent flash of wrong theme -->
    <script>
        (function () {
            var stored = localStorage.getItem('hs_theme') || 'default';
            var isDark = stored === 'dark' || (stored === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);
            if (isDark) document.documentElement.classList.add('dark');
        })();
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col bg-neutral-200 selection:bg-yellow-400 selection:text-neutral-700 dark:bg-neutral-800 antialiased">

    <div class="mx-auto w-full max-w-[85rem] px-4 sm:px-6 lg:px-8 2xl:max-w-full">
        @include('components.navbar')
    </div>

    <main class="grow">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
