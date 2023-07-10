@extends('admin.layouts.app')

@section('title', 'Courses | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Courses</h1>
        <a href="{{ route('courses.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow fs-5">
            <i class="las la-graduation-cap"></i>
            Course
        </a>
    </div>

    @include('components.session.success')

    @include('components.session.danger')

    {{-- Tables Start --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Courses Data</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="data_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Credit Hour</th>
                            <th>Program</th>
                            <th>Semester</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Credit Hour</th>
                            <th>Program</th>
                            <th>Semester</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course->id }}</td>

                                <td><a href="{{ route('courses.show', $course->id) }}">{{ $course->name }}</a></td>

                                <td>{{ $course->code }}</td>

                                <td>{{ $course->credit_hour }}</td>

                                <td>{{ $course->program->code }}</td>

                                <td>{{ $course->semester->code }}</td>

                                <td>
                                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-success">
                                        @include('components.buttons.edit')
                                    </a>

                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this course?')">
                                            @include('components.buttons.delete')
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        @if ($courses->isEmpty())
                            <tr>
                                <td colspan="7" align="center">No course records found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
