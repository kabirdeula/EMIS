@extends('admin.layouts.app')

@section('title', 'Insert New Grade | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Insert New Grade</h1>
    </div>

    <div class="p-4 row justify-content-center">
        <div class="col-lg-5 col-md-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <form action="{{ route('marks.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="student_id" class="col-form-label text-md-end fw-bold">
                        {{ __('Student') }}
                    </label>

                    <select name="student_id" id="student_id" class="form-control @error('student_id') is-invalid @enderror">
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->user->name }}</option>
                        @endforeach
                    </select>

                    @error('student_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="course_id" class="col-form-label text-md-end fw-bold">
                        {{ __('Course') }}
                    </label>

                    <select name="course_id" id="course_id" class="form-control @error('course_id') is-invalid @enderror">
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>

                    @error('course_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="marks" class="col-form-label text-md-end fw-bold">
                        {{ __('Marks') }}
                    </label>

                    <input type="number" name="marks" id="marks"
                        class="form-control @error('marks') is-invalid @enderror" autofocus>

                    @error('marks')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">
                    {{ __('Submit') }}
                </button>
            </form>
        </div>

        <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="{{ asset('images/add-user-img.png') }}" alt="Illustrations from StorySet" class="img-fluid">
        </div>
    </div>

@endsection
