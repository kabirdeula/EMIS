@extends('admin.layouts.app')

@section('title', 'Teachers | UniLink')

@section('section')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Teachers</h1>
        <a href="{{ route('teachers.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow fs-5">
            <i class="las la-graduation-cap me-2"></i>Teacher
        </a>
    </div>

    {{-- DataTables Start --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Teachers Data</h6>
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
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->id }}</td>
                                <td><a href="{{ route('teachers.show', $teacher->id) }}">{{ $teacher->user->name }}</a></td>
                                <td>{{ $teacher->user->email }}</td>
                                <td>{{ optional($teacher->program)->name }}</td>
                                <td>{{ optional($teacher->semester)->code }}</td>
                                <td>
                                    <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-success"><i
                                            class="las la-edit"></i></a>
                                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this assignment?')"><i
                                                class="las la-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
