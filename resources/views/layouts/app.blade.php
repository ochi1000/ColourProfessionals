<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto&family=Source+Sans+Pro&display=swap" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/png" href="/favicon.png">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('font/css/all.css') }}" rel="stylesheet"> <!--load all styles -->
</head>
<body>
    @include('includes.navbar')
    <div>
        @yield('content')
    </div>
    @include('includes.footer')
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</html>
