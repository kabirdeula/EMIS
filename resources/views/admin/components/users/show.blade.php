@extends('admin.layouts.app')

@section('title', 'Users')

@section('section')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Users</h1>
        <a href="{{ route('users.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow fs-5">
            <i class="las la-user-plus me-2"></i>User
        </a>
    </div>

    {{-- DataTables Start --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users Data</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="usersTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ Str::ucfirst($user->type) }}</td>
                                <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success"><i
                                            class="las la-user-edit"></i></a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this assignment?')"><i class="las la-user-times"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- DataTables End --}}
    {{-- <div class="container">
        <h1>Users</h1>
        <table id="users-table" class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    </div> --}}
@endsection
