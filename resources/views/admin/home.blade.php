@extends('admin.layouts.app')

@section('title', 'Dashboard | UniLink')

@section('content')
    @include('admin.components.cards')
    @include('admin.components.charts')

    <script>
        var _male = JSON.parse('{!! json_encode($male) !!}');
        var _female = JSON.parse('{!! json_encode($female) !!}');
        var _excellent = JSON.parse('{!! json_encode($excellent) !!}');
        var _best = JSON.parse('{!! json_encode($best) !!}');
        var _verygood = JSON.parse('{!! json_encode($very_good) !!}');
        var _good = JSON.parse('{!! json_encode($good) !!}');
        var _average = JSON.parse('{!! json_encode($average) !!}');
        var _fair = JSON.parse('{!! json_encode($fair) !!}');
        var _bad = JSON.parse('{!! json_encode($bad) !!}');

    </script>
@endsection
