@extends('admin.layouts.app')

@section('title', 'Insert New User | UniLink')

@section('section')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Insert New User</h1>
    </div>

    <div class="p-4 row justify-content-center">
        <div class="col-lg-6 col-md-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="mb-3">

                    <label for="name" class="col-form-label text-md-end fw-bold">{{ __('Name') }}</label>
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{-- password, type --}}
                </div>

                <div class="mb-3">
                    <label for="email" class="col-form-label text-md-end fw-bold">{{ __('Email') }}</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="col-form-label text-md-end fw-bold">{{ __('Password') }}</label>

                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="type" class="col-form-label text-md-end fw-bold">{{ __('Type') }}</label>

                    <input type="number" name="type" id="type"
                        class="form-control @error('type') is-invalid @enderror">

                    @error('type')
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
