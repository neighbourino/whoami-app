<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="whoami">

        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        {{-- <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-ipad.png" type="image/png">
        <link rel="apple-touch-icon" sizes="167x167" href="apple-touch-icon-ipad-retina.png" type="image/png">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-iphone-retina.png" type="image/png">

        <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#5bbad5"> --}}

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
