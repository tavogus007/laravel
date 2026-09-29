<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('styles')
    <!-- yield es una directiva de blade -->
    <title>
        @yield('title')
    </title>
</head>
<body>
    @include('layout._partials.menu')
    @yield('content')
</body>
</html>
