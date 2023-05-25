@extends('admin.layouts.app')

@section('title', 'Students | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Students</h1>
        <a href="{{ route('students.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow fs-5">
            <i class="las la-graduation-cap me-2"></i>Student
        </a>
    </div>

    <div class="row">
        <!-- Total BBM Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                BBM
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">
                                {{ $bbm_count }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="las la-user fs-1 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total BCA Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                BCA
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">
                                {{ $bca_count }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="las la-user fs-1 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total BHM Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                BHM
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">
                                {{ $bhm_count }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="las la-user fs-1 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total BIM Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                BIM
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">
                                {{ $bim_count }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="las la-user fs-1 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total BSc. CSIT Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                BSc.CSIT
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">
                                {{ $csit_count }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="las la-user fs-1 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    {{-- DataTables Start --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Students Data</h6>
            <a href="{{ route('students.pdf') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow fs-5">
                <i class="las la-print me-2"></i>Print
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="usersTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Program</th>
                            <th>Semester</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Program</th>
                            <th>Semester</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td><a href="{{ route('students.show', $student->id) }}">{{ $student->user->name }}</a></td>
                                <td>{{ $student->user->email }}</td>
                                <td>{{ optional($student->program)->code }}</td>
                                <td>{{ optional($student->semester)->code }}</td>
                                <td>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-success"><i
                                            class="las la-edit"></i></a>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this assignment?')"><i
                                                class="las la-trash"></i></button>
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
