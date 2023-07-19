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

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('admin.layouts.header')

    <div class="container">
        @yield('content')
    </div>

    </div>
    {{-- End of Main Content --}}

    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; UniLink 2023</span>
            </div>
        </div>
    </footer>

    </div>
    {{-- End of Content Wrapper --}}

    </div>
    {{-- End of Wrapper --}}

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- DataTables Demo -->
    <script src="{{ asset('assets/js/datatable.js') }}"></script>

    <!-- Charts -->
    <script src="{{ asset('assets/js/barchart.js') }}"></script>
    <script src="{{ asset('assets/js/piechart.js') }}"></script>

    <!-- Sidebar -->
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
</body>

</html>
