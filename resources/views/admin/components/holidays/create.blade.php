@extends('admin.layouts.app')

@section('title', 'Insert New Holiday | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Insert New Holiday</h1>
    </div>

    <div class="p-4 row justify-content-center">
        <div class="col-lg-6 col-md-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <form action="{{ route('holidays.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="name" class="col-form-label text-md-end fw-bold">
                        {{ __('Name') }}
                    </label>

                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="start_date" class="col-form-label text-md-end fw-bold">
                        {{ __('Start Date') }}
                    </label>

                    <input type="date" name="start_date" id="start_date"
                        class="form-control @error('start_date') is-invalid @enderror">

                    @error('start_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="end_date" class="col-form-label text-md-end fw-bold">
                        {{ __('End Date') }}
                    </label>

                    <input type="date" name="end_date" id="end_date"
                        class="form-control @error('end_date') is-invalid @enderror">

                    @error('end_date')
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
            <img src="{{ asset('images/holidays-img.png') }}" alt="Illustrations from StorySet" class="img-fluid">
        </div>
    </div>
@endsection
