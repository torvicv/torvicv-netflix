<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Flowbite -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen h-full">
            <div class="flex w-full justify-between text-white items-center relative z-30">
                <a class="ml-48" href="/">
                    <x-application-logo class="w-48 h-28 fill-current text-gray-500" />
                </a>
                <x-header />
            </div>

            <div class="w-full h-full block relative min-h-[66.666667%] h-[66.666667%]">
                {{ $content }}
            </div>
        </div>
    </body>
</html>
