@extends('admin.layouts.app')

@section('title', $student->user->name)

@section('content')

    <div class="container">
        <h1>Program Details: {{ $student->user->name }}</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $student->user->name }}</td>
                </tr>

                <tr>
                    <th>Total Days</th>
                    <td>{{ $total_days }}</td>
                </tr>

                <tr>
                    <th>Present Days</th>
                    <td>{{ $present_days }}</td>
                </tr>

                <tr>
                    <th>Absent Days</th>
                    <td>{{ $absent_days }}</td>
                </tr>

                <tr>
                    <th>Late Days</th>
                    <td>{{ $late_days }}</td>
                </tr>

                <tr>
                    <th>Attendance Percentage</th>
                    <td>{{ $attendance_percentage }}</td>
                </tr>

                <tr>
                    <td>
                        <a href="{{ route('attendances.edit', $student->id) }}" class="btn btn-success">
                            <i class="las la-edit"> Edit</i>
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
