@extends('admin.layouts.app')

@section('title', 'Marks | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Marks</h1>
        <a href="{{ route('marks.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow fs-5">
            <i class="las la-award"></i>
            Marks
        </a>
    </div>

    @include('components.session.success')

    @include('components.session.danger')

    {{-- Tables Start --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Marks Data</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="marks_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Student</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>

                                <td>
                                    <a href="{{ route('marks.show', $student->id) }}">
                                        {{ optional($student->user)->name }}
                                    </a>
                                </td>

                                <td>
                                    <a href="{{ route('marks.edit', $student->id) }}" class="btn btn-success">
                                        @include('components.buttons.edit')
                                    </a>

                                    <form action="{{ route('marks.destroy', $student->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this marks?')">
                                            @include('components.buttons.delete')
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="3" align="center">No mark records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $students->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
