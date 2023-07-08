@extends('admin.layouts.app')

@section('title', 'Attendances | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Attendances</h1>
        <a href="{{ route('attendances.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow fs-5">
            <i class="las la-user-check me-2"></i>Attendance
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
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
                <table class="table table-bordered" id="attendnace_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Student</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>

                                <td>
                                    <a href="{{ route('attendances.show', $student->id) }}">
                                        {{ optional($student->user)->name }}
                                    </a>
                                </td>

                                <td>
                                    <a href="{{ route('attendances.edit', $student->id) }}" class="btn btn-success">
                                        <i class="las la-edit"></i>
                                        {{ __('Edit') }}
                                    </a>

                                    <form action="{{ route('attendances.destroy', $student->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this assignment?')">
                                            <i class="las la-trash"></i>{{ __('Delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" align="center">No attendance records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $students->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
