<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Livewire</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"> --}}
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            </style>
            @livewireStyles
            <script src="https://kit.fontawesome.com/263edd3e29.js" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        {{-- @livewire('articles') --}}
        {{ $slot }}
        @livewireScripts
    </body>
</html>