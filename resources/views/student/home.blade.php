@extends('student.layouts.app')

@section('title', 'Dashboard | UniLink')

@section('content')
    @include('student.components.charts')

    <script>
        var _present = JSON.parse('{!! json_encode($present) !!}');
        var _absent = JSON.parse('{!! json_encode($absent) !!}');
    </script>
@endsection
