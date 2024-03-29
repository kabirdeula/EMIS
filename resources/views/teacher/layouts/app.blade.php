<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}" type="image/x-icon">

    {{-- Icons --}}
    <link rel="stylesheet" href="{{ asset('/icons/css/line-awesome.min.css') }}">

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('teacher.layouts.header')

    <div class="container">
        @yield('content')
    </div>

    </div>
    {{-- End of Main Content --}}

    </div>
    {{-- End of Content Wrapper --}}

    </div>
    {{-- End of Wrapper --}}
</body>

</html>
