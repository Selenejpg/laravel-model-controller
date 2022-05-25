<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>@yield('title')</title>
</head>
<body>

    {{-- menu --}}
    @include('includes.header')

    <div class="text-center mt-4">
        <h1>Lista film</h1>
    </div>

    {{-- contenuto dinamico in base alle pagine --}}
    <div class="container">

        @yield('content')
        
    </div>

    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>