@extends('admin.layouts.app')

@section('title', 'Holidays | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Holidays</h1>
        <a href="{{ route('holidays.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow fs-5">
            <i class="las la-calendar-plus"></i>
            Holiday
        </a>
    </div>

    @include('components.session.success')

    @include('components.session.danger')

    {{-- Tables Start --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Holiday Data</h6>
            <a href="{{ route('holidays.pdf') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow fs-5">
                @include('components.buttons.print')
            </a>
        </div>

        <div class="card-body">
            <div class="table-hover">
                <table class="table table-hover" id="data_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @forelse ($holidays as $holiday)
                            <tr>
                                <td>{{ $holiday->id }}</td>

                                <td><a href="{{ route('holidays.show', $holiday->id) }}">{{ $holiday->name }}</a></td>

                                <td>{{ $holiday->start_date }}</td>

                                <td>{{ $holiday->end_date }}</td>

                                <td>
                                    <a href="{{ route('holidays.edit', $holiday->id) }}" class="btn btn-success">
                                        @include('components.buttons.edit')
                                    </a>

                                    <form action="{{ route('holidays.destroy', $holiday->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this holiday?')">
                                            @include('components.buttons.delete')
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="5" align="center">No holiday records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
