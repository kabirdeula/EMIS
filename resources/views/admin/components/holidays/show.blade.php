@extends('admin.layouts.app')

@section('title', $holidays->name)

@section('content')

    <div class="container">
        <h1>Program Details: {{ $holidays->name }}</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $holidays->name }}</td>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <td>{{ $holidays->start_date }}</td>
                </tr>
                </tr>
                <tr>
                    <th>End Date</th>
                    <td>{{ $holidays->end_date }}</td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('holidays.edit', $holidays->id) }}" class="btn btn-success">
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
