@extends('admin.layouts.app')

@section('title', $courses->name)

@section('content')

    <div class="container">
        <h1>Program Details: {{ $courses->name }}</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $courses->name }}</td>
                </tr>
                <tr>
                    <th>Code</th>
                    <td>{{ $courses->code }}</td>
                </tr>
                <tr>
                    <th>Credit Hour</th>
                    <td>{{ $courses->credit_hour }}</td>
                </tr>
                <tr>
                    <th>Program</th>
                    <td>{{ $courses->program->name }}</td>
                </tr>
                <tr>
                    <th>Semester</th>
                    <td>{{ $courses->semester->code }}</td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('courses.edit', $courses->id) }}" class="btn btn-success">
                            <i class="las la-graduation-cap"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('courses') }}" class="btn btn-danger">
                            <i class="las la-undo"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
