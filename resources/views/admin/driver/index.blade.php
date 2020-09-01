@extends('admin.layouts.dashboard')
@section('title','Driver')
@section('content')

<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>No Hp</th>
                                <th>Email</th>
                                <th>Jenis Driver</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>No Hp</th>
                                <th>Email</th>
                                <th>Jenis Driver</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($drivers as $key => $driver)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$driver->name}}</td>
                                <td>{{$driver->hp}}</td>
                                <td>{{$driver->email}}</td>
                                <td>{{$driver->jenisdriver}}</td>
                                <td><img class="img-fluid" src="{{asset($driver->image)}}" width="100px" /></td>
                                <td>
                                    <a href="{{route('driver.show',$driver->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('driver.edit',$driver->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('driver.destroy',$driver->id)}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection