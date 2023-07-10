@extends('admin.layouts.app')

@section('title', $programs->name)

@section('content')

    <div class="container">
        <h1>Program Details: {{ $programs->name }}</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $programs->name }}</td>
                </tr>

                <tr>
                    <th>Code</th>
                    <td>{{ $programs->code }}</td>
                </tr>

                <tr>
                    <td>
                        <a href="{{ route('programs.edit', $programs->id) }}" class="btn btn-success">
                            @include('components.buttons.edit')
                        </a>
                    </td>

                    <td>
                        @include('components.buttons.back')
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
