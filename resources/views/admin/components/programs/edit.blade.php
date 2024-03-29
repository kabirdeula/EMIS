@extends('admin.layouts.app')

@section('title', 'Update '. $programs->name .' | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Update Programs</h1>
    </div>

    <div class="p-4 row justify-content-center">
        <div class="col-lg-6 col-md-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <form action="{{ route('programs.update', $programs->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="col-form-label text-md-end fw-bold">{{ __('Name') }}</label>

                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror" value="{{ $programs->name }}">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="code" class="col-form-label text-md-end fw-bold">{{ __('Code') }}</label>

                    <input type="text" name="code" id="code"
                        class="form-control @error('code') is-invalid @enderror" value="{{ $programs->code }}">

                    @error('code')
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
            <img src="{{ asset('images/programs-img.png') }}" alt="Illustrations from StorySet" class="img-fluid">
        </div>
    </div>
@endsection
