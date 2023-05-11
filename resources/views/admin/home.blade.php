@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    You are a Admin User.
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.components.usersrecords')

@endsection
