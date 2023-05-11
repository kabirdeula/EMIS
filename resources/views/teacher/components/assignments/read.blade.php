@extends('teacher.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $assignments->title }}</div>

                <div class="card-body">
                    <p>{{ $assignments->description }}</p>
                    <p><strong>Program Code:</strong> {{ $programs->code }}</p>
                    <p><strong>Semester Code:</strong> {{ $semesters->code }}</p>
                    <p><strong>Course Name:</strong> {{ $courses->name }}</p>
                    {{-- <p><strong>Teacher:</strong> {{ $teachers->first_name }} {{ $assignment->teacher_last_name }}</p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
