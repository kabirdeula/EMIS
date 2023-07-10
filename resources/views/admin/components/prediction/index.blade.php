@extends('admin.layouts.app')

@section('title', 'Prediction | UniLink')

@section('content')

    {{-- Page Heading --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Prediction</h1>
    </div>

    <div class="row">
        <!-- Total Excellent Card-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-success">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-uppercase mb-1">
                                Excellent
                            </div>

                            <div class="h5 mb-0 fw-bold">
                                {{ $excellent }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Best Card-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-gold">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-uppercase mb-1">
                                Best
                            </div>

                            <div class="h5 mb-0 fw-bold">
                                {{ $best }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Very Good Card-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-uppercase mb-1">
                                Very Good
                            </div>

                            <div class="h5 mb-0 fw-bold">
                                {{ $very_good }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Good Card-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-uppercase mb-1">
                                Good
                            </div>

                            <div class="h5 mb-0 fw-bold">
                                {{ $good }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Average Card-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-secondary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-uppercase mb-1">
                                Average
                            </div>

                            <div class="h5 mb-0 fw-bold">
                                {{ $average }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Fair Card-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-brown">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-light text-uppercase mb-1">
                                Fair
                            </div>

                            <div class="h5 mb-0 fw-bold text-light">
                                {{ $fair }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Bad Card-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-danger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-uppercase mb-1">
                                Bad
                            </div>

                            <div class="h5 mb-0 fw-bold">
                                {{ $bad }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tables Start --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Prediction Data</h6>
        </div>

        <div class="card-body">
            <div class="table-hover">
                <table class="table table-hover" id="data_table" width="100%" cellspacing="0">
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
                        @forelse ($predictions as $prediction)
                            <tr>
                                <td>{{ $prediction->id }}</td>
                                <td>{{ $prediction->name }}</td>
                                <td>
                                    @if ($prediction->prediction === 'excellent')
                                        <span class="btn btn-success">{{ Str::ucfirst($prediction->prediction) }}</span>
                                    @elseif ($prediction->prediction === 'best')
                                        <span class="btn btn-gold">{{ Str::ucfirst($prediction->prediction) }}</span>
                                    @elseif ($prediction->prediction === 'very good')
                                        <span class="btn btn-primary">{{ Str::ucfirst($prediction->prediction) }}</span>
                                    @elseif ($prediction->prediction === 'good')
                                        <span class="btn btn-warning">{{ Str::ucfirst($prediction->prediction) }}</span>
                                    @elseif ($prediction->prediction === 'average')
                                        <span class="btn btn-secondary">{{ Str::ucfirst($prediction->prediction) }}</span>
                                    @elseif ($prediction->prediction === 'fair')
                                        <span class="btn btn-brown">{{ Str::ucfirst($prediction->prediction) }}</span>
                                    @else
                                        <span class="btn btn-danger">{{ Str::ucfirst($prediction->prediction) }}</span>
                                    @endif
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="3" align="center">No records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
