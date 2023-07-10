@extends('admin.layouts.app')

@section('title', $teachers->user->name)

@section('content')

    <div class="container">
        <h1>Teacher Details: {{ $teachers->user->name }}</h1>
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
