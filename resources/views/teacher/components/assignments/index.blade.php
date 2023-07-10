@extends('teacher.layouts.app')

@section('title', 'Assignments | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Assignments</h1>
        <a href="{{ route('teacher.assignments.create') }}"
            class="d-none d-sm-inline-block btn btn-sm btn-warning shadow fs-5">
            <i class="las la-graduation-cap me-2"></i>Assignment
        </a>
    </div>

    {{-- DataTables Start --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Assignments Data</h6>
        </div>

        <div class="card-body">
            <div class="table-hover">
                <table class="table table-hover" id="usersTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Due Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Due Date</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($assignments as $assignment)
                            <tr>
                                <td>{{ $assignment->id }}</td>
                                <td><a href="{{ route('teacher.assignments.show', $assignment->id) }}">{{ $assignment->title }}</a></td>
                                <td>{{ $assignment->description }}</td>
                                <td>{{ $assignment->due_date }}</td>
                                {{-- <td>{{ optional($assignment->program)->name }}</td> --}}
                                {{-- <td>{{ optional($assignment->semester)->code }}</td> --}}
                                <td>
                                    <a href="{{ route('teacher.assignments.edit', $assignment->id) }}" class="btn btn-success"><i
                                            class="las la-edit"></i></a>
                                    <form action="{{ route('teacher.assignments.destroy', $assignment->id) }}" method="POST"
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

{{-- @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Assignments</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="mb-3">
                            <a href="{{ route('assignment.assignments.create') }}" class="btn btn-primary">Create Assignment</a>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Due Date</th>
                                    <th>Course</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assignments as $assignment)
                                    <tr>
                                        <td>{{ $assignment->title }}</td>
                                        <td>{{ $assignment->description }}</td>
                                        <td>{{ $assignment->due_date }}</td>
                                        <td>{{ $assignment->course_id }}</td>
                                        <td>
                                            <a href="{{ route('assignment.assignments.show', $assignment->id) }}" class="btn btn-sm btn-info">View</a>
                                            <a href="{{ route('assignment.assignments.edit', $assignment->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('assignment.assignments.destroy', $assignment->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this assignment?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
