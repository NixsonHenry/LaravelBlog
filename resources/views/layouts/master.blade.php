<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">   
     {{-- href="/css/app.css" --}}
</head>

<body>
    @include('layouts.navbar')
    <div class="container mx-auto font-serif">@yield('content')</div>
    {{-- @include('layouts.footer') --}}
    <script src="{{ asset('js/app.js ') }}"></script>
</body>
</html>