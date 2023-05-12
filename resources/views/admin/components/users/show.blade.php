@extends('admin.layouts.app')

@section('content')
    <div class="container">
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
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#users-table').DataTable();
        });
    </script>
@endsection
