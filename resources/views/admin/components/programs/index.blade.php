@extends('admin.layouts.app')

@section('title', 'Programs | UniLink')

@section('content')

    @include('components.session.success')

    @include('components.session.danger')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Programs</h1>
        <a href="{{ route('programs.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow fs-5">
            <i class="las la-briefcase"></i>
            Program
        </a>
    </div>

    {{-- Tables Start --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Programs Data</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="programs_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @foreach ($programs as $program)
                            <tr>
                                <td>{{ $program->id }}</td>

                                <td><a href="{{ route('programs.show', $program->id) }}">{{ $program->name }}</a></td>

                                <td>{{ $program->code }}</td>

                                <td>
                                    <a href="{{ route('programs.edit', $program->id) }}" class="btn btn-success">
                                        @include('components.buttons.edit')
                                    </a>

                                    <form action="{{ route('programs.destroy', $program->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this program?')">
                                            @include('components.buttons.delete')
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
