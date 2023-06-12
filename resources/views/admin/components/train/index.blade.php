@extends('admin.layouts.app')

@section('title', 'Prediction | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Prediction</h1>
    </div>

    {{-- DataTables Start --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Prediction Data</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="usersTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Prediction</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Prediction</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @forelse ($results as $result)
                            <tr>
                                <td>{{ $result['id'] }}</td>
                                <td>{{ $result['student'] }}</td>
                                <td>{{ Str::ucfirst($result['prediction']) }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" align="center">No attendance records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
