@extends('admin.layouts.app')

@section('title', $students->user->name)

@section('content')

    <div class="container">
        <h1>Program Details: {{ $students->user->name }}</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $students->user->name }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ $students->user->email }}</td>
                </tr>

                <tr>
                    <th>Date of Birth</th>
                    <td>{{ $students->date_of_birth }}</td>
                </tr>

                <tr>
                    <th>Mobile Number</th>
                    <td>{{ $students->phone_number }}</td>
                </tr>

                <tr>
                    <th>Program</th>
                    <td>{{ optional($students->program)->name }}</td>
                </tr>

                <tr>
                    <th>Semester</th>
                    <td>{{ optional($students->semester)->code }}</td>
                </tr>

                <tr>
                    <th>Courses</th>
                    @foreach ($students->courses as $course)
                        <td>{{ $course->name }}</td>
                    @endforeach
                </tr>

                <tr>
                    <td>
                        <a href="{{ route('students.edit', $students->id) }}" class="btn btn-success">
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
