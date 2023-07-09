@extends('admin.layouts.app')

@section('title', 'Update ' . $students->user->name . ' | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Update Marks</h1>
    </div>

    <div class="p-4 row justify-content-center">
        <div class="col-lg-6 col-md-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <form action="{{ route('marks.update', $students->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="student_id" class="col-form-label text-md-end fw-bold">
                        {{ __('Student: ' . $students->user->name) }}
                    </label>

                    <input type="text" name="student_id" id="student_id" class="form-control"
                        value="{{ $marks->student_id }}">

                    @error('student_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="course_id" class="col-form-label text-md-end fw-bold">
                        {{ __('Course: ' . $marks->course->name) }}
                    </label>

                    <input type="text" name="course_id" id="course_id"
                        class="form-control @error('course_id') is-invalid @enderror" value="{{ $marks->course_id }}">

                    @error('course_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="marks" class="col-form-label text-md-end fw-bold">{{ __('Marks') }}</label>

                    <input type="text" name="marks" id="marks"
                        class="form-control @error('marks') is-invalid @enderror" value="{{ $marks->marks }}">

                    @error('marks')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                @include('components.buttons.update')

                @include('components.buttons.back')
            </form>
        </div>

        <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="{{ asset('images/marks-img.png') }}" alt="Illustrations from StorySet" class="img-fluid">
        </div>
    </div>
@endsection
