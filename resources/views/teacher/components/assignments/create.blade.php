@extends('teacher.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Create Assignment') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('teacher.assignments.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="due_date">Due Date</label>
                                <input type="date" class="form-control" id="due_date" name="due_date">
                            </div>

                            <div class="form-group">
                                <label for="program_id">Program</label>
                                <select class="form-control" id="program_id" name="program_id">
                                    @foreach ($programs as $program)
                                        <option value="{{ $program->id }}">{{ $program->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="semester_id">Semester</label>
                                <select class="form-control" id="semester_id" name="semester_id">
                                    @foreach ($semesters as $semester)
                                        <option value="{{ $semester->id }}">{{ $semester->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="course_id">Course</label>
                                <select class="form-control" id="course_id" name="course_id">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="teacher_id">Teacher</label>
                                <select class="form-control" id="teacher_id" name="teacher_id">
                                    @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}">
                                            {{ $teacher->first_name . ' ' . $teacher->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Create Assignment</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Submit Assignment') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('assignment.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description">{{ old('description') }}</textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" required>

                                @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
