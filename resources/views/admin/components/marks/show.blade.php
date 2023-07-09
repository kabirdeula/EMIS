@extends('admin.layouts.app')

@section('title', $student->user->name)

@section('content')
<div class="container">
    <h1>Marks Details: </h1>
    <table class="table">
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ $student->user->name }}</td>
            </tr>

            <tr>
                <th>Course</th>
                <td>{{ $marks->course->name }}</td>
            </tr>

            <tr>
                <th>Marks</th>
                <td>{{ $marks->marks }}</td>
            </tr>

            <tr>
                <td>
                    <a href="{{ route('marks.edit', $student->id) }}" class="btn btn-success">
                        @include('components.buttons.edit')
                    </a>
                </td>

                <td>
                    @include('components.buttons.back')
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
