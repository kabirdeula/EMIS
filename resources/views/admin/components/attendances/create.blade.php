@extends('admin.layouts.app')

@section('title', 'Insert New Attendance | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Insert New Attendance</h1>
    </div>

    <div class="p-4 row justify-content-center">
        <div class="col-lg-6 col-md-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <form action="{{ route('attendances.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="student_id" class="col-form-label text-md-end fw-bold">
                        {{ __('Student') }}
                    </label>

                    <select name="student_id" id="student_id" class="form-control @error('student_id') is-invalid @enderror">
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">
                                {{ $student->user->name }}
                            </option>
                        @endforeach

                    </select>

                    @error('student_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="date" class="col-form-label text-md-end fw-bold">
                        {{ __('Date') }}
                    </label>

                    <input type="date" name="date" id="date"
                        class="form-control @error('date') is-invalid @enderror" value="{{ date('Y-m-d') }}"
                        max="{{ date('Y-m-d') }}" readonly>

                    @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="col-form-label text-md-end fw-bold">
                        {{ __('Status') }}
                    </label>

                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                        <option value="">Select Status</option>
                        <option value="present">Present</option>
                        <option value="absent">Absent</option>
                        <option value="late">Late</option>

                    </select>
                    @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                @include('components.buttons.create')
            </form>
        </div>

        <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="{{ asset('images/attendance-img.png') }}" alt="Illustrations from StorySet" class="img-fluid">
        </div>
    </div>
@endsection
