@extends('teacher.layouts.app')

@section('content')
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
                            <a href="{{ route('teacher.assignments.create') }}" class="btn btn-primary">Create Assignment</a>
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
                                            <a href="{{ route('teacher.assignments.show', $assignment->id) }}" class="btn btn-sm btn-info">View</a>
                                            <a href="{{ route('teacher.assignments.edit', $assignment->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('teacher.assignments.destroy', $assignment->id) }}" method="POST" style="display: inline-block;">
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
@endsection
