@extends('teacher.layouts.app')

@section('title', 'Update ' . $assignments->title . ' | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Update Assignment</h1>
    </div>

    <div class="p-4 row justify-content-center">
        <div class="col-lg-6 col-md-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <form action="{{ route('teacher.assignments.update', $assignments->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="col-form-label text-md-end fw-bold">
                        {{ __('Title') }}
                    </label>

                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ $assignments->title }}">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="col-form-label text-md-end fw-bold">
                        {{ __('Description') }}
                    </label>

                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" value="{{ $assignments->description }}">
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="due_date" class="col-form-label text-md-end fw-bold">
                        {{ __('Due Date') }}
                    </label>

                    <input type="date" class="form-control @error('due_date') is-invalid @enderror" id="due_date"
                        name="due_date" value="{{ $assignments->due_date }}">
                    @error('due_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">
                    {{ __('Update') }}
                </button>

            </form>
        </div>

        <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="{{ asset('images/add-user-img.png') }}" alt="Illustrations from StorySet" class="img-fluid">
        </div>
    </div>

@endsection
