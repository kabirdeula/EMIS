@extends('admin.layouts.app')

@section('title', 'Users | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Users</h1>
        <a href="{{ route('users.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow fs-5">
            <i class="las la-user-plus me-2"></i>User
        </a>
    </div>

    @include('components.session.success')

    @include('components.session.danger')

    {{-- Tables Start --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Users Data</h6>
            <a href="{{ route('users.pdf') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow fs-5">
                <i class="las la-print"></i>
                Print
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="data_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>

                                <td>{{ Str::ucfirst($user->type) }}</td>

                                <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>

                                <td>{{ $user->email }}</td>

                                <td>{{ $user->gender }}</td>

                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">
                                        @include('components.buttons.edit')
                                    </a>

                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this user?')">
                                            @include('components.buttons.delete')
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" align="center">No users records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
