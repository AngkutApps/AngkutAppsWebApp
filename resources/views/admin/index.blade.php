@extends('admin.layouts.dashboard')
@section('title','Dashboard')
@section('content')

<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Driver</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$driverCount}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-car fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Pesan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pesanCount}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-envelope fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Artikel</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$articleCount}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah User</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$userCount}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                <h4>5 Pendaftar baru</h4>
                <a href="{{route('driver.index')}}" class="btn btn-sm btn-primary float-right">View More <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>No Hp</th>
                                <th>Jenis Driver</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($drivers as $key => $driver)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$driver->name}}</td>
                                <td>{{$driver->hp}}</td>
                                <td>{{$driver->jenisdriver}}</td>
                                <td><img class="img-fluid" src="{{asset($driver->image)}}" width="100px" /></td>
                                <td>
                                    <a href="{{route('driver.show',$driver->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <img class="card-img-top" src="{{asset('asset_frontend/img/illustration-cars.svg')}}" height="200px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-text">5 Pesan Terbaru</h5>
                <ul class="list-group list-group-flush">
                    @foreach($messages as $message)
                    <li class="list-group-item">{{$message->message}}</li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>

    @endsection