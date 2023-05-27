@extends('admin.layouts.app')

@section('title', $teachers->user->name)

@section('content')

    <div class="container">
        <h1>Program Details: {{ $teachers->user->name }}</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $teachers->user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $teachers->user->email }}</td>
                </tr>
                <tr>
                    <th>Program</th>
                    <td>{{ optional($teachers->program)->name }}</td>
                </tr>
                <tr>
                    <th>Semester</th>
                    <td>{{ optional($teachers->semester)->code }}</td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('teachers.edit', $teachers->id) }}" class="btn btn-success">
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
