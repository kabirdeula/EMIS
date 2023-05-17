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

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('admin.layouts.header')

    <div class="container">
        @yield('section')
    </div>

    </div>
    {{-- End of Main Content --}}

    </div>
    {{-- End of Content Wrapper --}}

    </div>
    {{-- End of Wrapper --}}
</body>

</html>
{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
