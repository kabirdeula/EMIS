@extends('admin.layouts.app')

@section('title', 'Update ' . $attendances->user->name . ' | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Update Attendance</h1>
    </div>

    <div class="p-4 row justify-content-center">
        <div class="col-lg-6 col-md-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <form action="{{ route('attendances.update', $attendances->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="student_id" class="col-form-label text-md-end fw-bold">
                        {{ __('Student:') . ' ' . $attendances->user->name }}
                    </label>

                    <input type="text" class="form-control" id="student_id" name="student_id"
                        value="{{ $attendances->student_id }}" readonly>

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
                        class="form-control @error('date') is-invalid @enderror" value="{{ $attendances->date }}">

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
                        <option value="present {{ $attendances->status === 'present' ? 'selected' : '' }}">
                            Present
                        </option>
                        <option value="absent {{ $attendances->status === 'absent' ? 'selected' : '' }}">Absent</option>
                        <option value="late {{ $attendances->status === 'late' ? 'selected' : '' }}">Late</option>

                    </select>

                    @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="las la-edit"></i>
                    {{ __('Update') }}
                </button>

                <a href="{{ url()->previous() }}" class="btn btn-danger">
                    <i class="las la-undo"></i>
                    {{ __('Back') }}
                </a>
            </form>
        </div>

        <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="{{ asset('images/attendance-img.png') }}" alt="Illustrations from StorySet" class="img-fluid">
        </div>
    </div>
@endsection
