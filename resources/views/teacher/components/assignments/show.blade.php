@extends('teacher.layouts.app')

@section('title', $assignments->title)

@section('content')
<div class="container">
    <h1>Assignment Details: {{ $assignments->title }}</h1>
    <table class="table">
        <tbody>
            <tr>
                <th>Title</th>
                <td>{{ $assignments->title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $assignments->description }}</td>
            </tr>
            <tr>
                <th>Due Date</th>
                <td>{{ $assignments->due_date }}</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('courses.edit', $assignments->id) }}" class="btn btn-success">
                        <i class="las la-graduation-cap"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ url() -> previous() }}" class="btn btn-danger">
                        <i class="las la-undo"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>

</div>
@endsection
