@extends('admin.layouts.app')

@section('title', $attendances->user->name)

@section('content')

    <div class="container">
        <h1>Program Details: {{ $attendances->user->name }}</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $attendances->user->name }}</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>{{ $attendances->date }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ ucfirst($attendances->status) }}</td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('attendances.edit', $attendances->id) }}" class="btn btn-success">
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
