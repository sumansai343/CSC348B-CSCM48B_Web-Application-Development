@extends('layouts.master')
@section('title', 'Blog Dashboard')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Admin Panel</h1>
        <div class="row">

            <div class="col-xl-12 col-md-6">
                <div class="card bg-green text-white mb-4">
                    <div class="card-body">Total Posts <h2>{{ $posts }}</h2>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/posts') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-6">
                <div class="card bg-green text-white mb-4">
                    <div class="card-body">Total Users <h2>{{ $users }}</h2>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/users') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-6">
                <div class="card bg-green text-white mb-4">
                    <div class="card-body">Total Admin <h2>{{ $admins }}</h2>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/users') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
