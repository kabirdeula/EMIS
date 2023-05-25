@extends('admin.layouts.app')

@section('title', 'Attendances | UniLink')

@section('content')
    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Attendances</h1>
        <a href="{{ route('attendances.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow fs-5">
            <i class="las la-graduation-cap me-2"></i>Attendance
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- DataTables Start --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Attendance Data</h6>
            <a href="{{ route('attendances.pdf') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow fs-5">
                <i class="las la-print me-2"></i>Print
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="usersTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Student</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($attendances as $attendance)
                            <tr>
                                <td>{{ $attendance->id }}</td>
                                <td><a
                                        href="{{ route('attendances.show', $attendance->id) }}">{{ optional($attendance->user)->name }}</a>
                                </td>
                                <td>{{ $attendance->date }}</td>
                                <td>
                                    @if ($attendance->status === 'absent')
                                        <button class="btn btn-danger">Absent</button>
                                    @elseif ($attendance->status === 'present')
                                        <button class="btn btn-success">Present</button>
                                    @elseif ($attendance->status === 'late')
                                        <button class="btn btn-warning">Late</button>
                                    @else
                                        <button class="btn btn-secondary">Unknown</button>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('attendances.edit', $attendance->id) }}" class="btn btn-success"><i
                                            class="las la-edit"></i></a>
                                    <form action="{{ route('attendances.destroy', $attendance->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this assignment?')"><i
                                                class="las la-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No attendance records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
