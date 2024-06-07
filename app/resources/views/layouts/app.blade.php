<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Menggunakan nama aplikasi dari konfigurasi, default ke 'ESB Playbook' -->
    <title>{{ config('app.name', 'ESB Playbook') }}</title>

     <link rel="icon" href="{{ asset('esbplaybook.png') }}" type="image/png"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <style>

    </style>
    @livewireStyles
</head>

<body class="font-sans antialiased">
    @include('layouts.partials.sidebar')
    {{-- <x-banner /> --}}
    @include('layouts.partials.header')
    @include('layouts.partials.sidebar')
    @yield('hero')
    <main class="container mx-auto px-5 flex ; flex-direction: row-reverse">
        {{ $slot }}
    </main>
    @include('layouts.partials.footer')
    @stack('modals')
    <script>
        $(document).ready(function(e) {
            $("#toggle_btn").click(function() {
                window.location.href = "http://127.0.0.1:8000/";
            });
        });

        $(document).on('click', '#toggle_btn', function() {
            console.log("signed Up");

            $("#nav-bar").css({
                'width': '20%',
                'margin-left': '1%'
            });

            $(".header_toggle").attr('id', 'toggle-muncul');
        });

        $(document).on('click', '#toggle-muncul', function() {
            console.log('ccc');
            $("#nav-bar").css({
                'width': '0%',
                'margin-left': '0'
            });
            $(".header_toggle").attr('id', 'toggle_btn');
        });
    </script>
    @livewireScripts
</body>
</html>
