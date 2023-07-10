@extends('admin.layouts.app')

@section('title', 'Update '. $users->name .' | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Update User</h1>
    </div>

    <div class="p-4 row justify-content-center">
        <div class="col-lg-6 col-md-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <form action="{{ route('users.update', $users->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="col-form-label text-md-end fw-bold">{{ __('Name') }}</label>

                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror" value="{{ $users->name }}">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="col-form-label text-md-end fw-bold">{{ __('Email') }}</label>

                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" value="{{ $users->email }}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="col-form-label text-md-end fw-bold">{{ __('Password') }}</label>

                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" value="{{ $users->password }}">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="col-form-label text-md-end fw-bold">{{ __('Gender') }}</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender-male" value="Male"
                            {{ $users->gender === 'Male' ? 'checked' : '' }}>
                        <label class="form-check-label" for="gender-male">
                            Male
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender-female" value="Female"
                            {{ $users->gender === 'Female' ? 'checked' : '' }}>
                        <label class="form-check-label" for="gender-female">
                            Female
                        </label>
                    </div>

                    @error('gender')
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
            <img src="{{ asset('images/add-user-img.png') }}" alt="Illustrations from StorySet" class="img-fluid">
        </div>
    </div>
@endsection
