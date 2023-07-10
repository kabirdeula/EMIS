@extends('admin.layouts.app')

@section('title', 'Insert New Student | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Insert New Student</h1>
    </div>

    <div class="p-4 row justify-content-center">
        <div class="col-lg-6 col-md-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <form action="{{ route('students.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="user_id" class="col-form-label text-md-end fw-bold">{{ __('Name') }}</label>

                    <select name="user_id" id="user_id"
                        class="form-control @error('user_id') is-invalid @enderror" autofocus>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('user_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="date_of_birth" class="col-form-label text-md-end fw-bold">{{ __('Date of Birth') }}</label>

                    <input type="date" name="date_of_birth" id="date_of_birth"
                        class="form-control @error('date_of_birth') is-invalid @enderror">

                    @error('date_of_birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="col-form-label text-md-end fw-bold">{{ __('Phone Number') }}</label>

                    <input type="text" name="phone_number" id="phone_number"
                        class="form-control @error('phone_number') is-invalid @enderror">

                    @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="program_id" class="col-form-label text-md-end fw-bold">{{ __('Program') }}</label>

                    <select name="program_id" id="program_id"
                        class="form-control @error('program_id') is-invalid @enderror">
                        @foreach ($programs as $program)
                            <option value="{{ $program->id }}">
                                {{ $program->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('program_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="semester_id" class="col-form-label text-md-end fw-bold">{{ __('Semester') }}</label>

                    <select name="semester_id" id="semester_id"
                        class="form-control @error('semester_id') is-invalid @enderror">
                        @foreach ($semesters as $semester)
                            <option value="{{ $semester->id }}">
                                {{ $semester->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('semester_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                @include('components.buttons.create')

                @include('components.buttons.back')
            </form>
        </div>

        <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="{{ asset('images/student-img.png') }}" alt="Illustrations from StorySet" class="img-fluid">
        </div>
    </div>
@endsection
