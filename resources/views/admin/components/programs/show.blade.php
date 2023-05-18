@extends('admin.layouts.app')

@section('title', $programs->name)

@section('section')

    <div class="container">
        <h1>Program Details: {{ $programs->name }}</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $programs->name }}</td>
                </tr>
                <tr>
                    <th>Code</th>
                    <td>{{ $programs->code }}</td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('programs.edit', $programs->id) }}" class="btn btn-success">
                            <i class="las la-graduation-cap"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('programs') }}" class="btn btn-danger">
                            <i class="las la-undo"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
