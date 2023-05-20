@extends('admin.layouts.app')

@section('title', $users->name)

@section('content')

    <div class="container">
        <h1>User Details: {{ $users->name }}</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $users->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $users->email }}</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>{{ $users->type }}</td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('users.edit', $users->id) }}" class="btn btn-success">
                            <i class="las la-user-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('users') }}" class="btn btn-danger">
                            <i class="las la-undo"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
