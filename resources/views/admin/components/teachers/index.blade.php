@extends('admin.layouts.app')

@section('title', 'Teachers | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Teachers</h1>
        <a href="{{ route('teachers.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow fs-5">
            <i class="las la-chalkboard-teacher"></i>
            Teacher
        </a>
    </div>

    @include('components.session.success')

    @include('components.session.danger')

    {{-- DataTables Start --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Teachers Data</h6>
            <a href="{{ route('teachers.pdf') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow fs-5">
                <i class="las la-print"></i>
                Print
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="usersTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Program</th>
                            <th>Semester</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Program</th>
                            <th>Semester</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @forelse ($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->id }}</td>

                                <td><a href="{{ route('teachers.show', $teacher->id) }}">{{ $teacher->user->name }}</a></td>

                                <td>{{ $teacher->user->email }}</td>

                                <td>{{ optional($teacher->program)->code }}</td>

                                <td>{{ optional($teacher->semester)->code }}</td>
                                <td>
                                    <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-success">
                                        @include('components.buttons.edit')
                                    </a>
                                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this teacher?')">
                                            @include('components.buttons.delete')
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" align="center">No Teacher's record found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $teachers->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
