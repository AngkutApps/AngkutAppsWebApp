@extends('admin.layouts.dashboard')
@section('title','Show Driver')
@section('content')
<div class="row mb-3">
    <div class="col">
        <a href="{{route('driver.index')}}" class="btn btn-md btn-success rounded-pill shadow-lg"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h3>Detail Driver</h3>
            </div>
            <div class="card-body">
                <img class="img-fluid mx-auto d-block mb-3" src="{{asset('asset_frontend/img/driver.jpg')}}" width="200px">
                <h5>Email : {{$driver->email}}</h5>
                <h5>Nama Driver : {{$driver->name}}</h5>
                <h5>No Hp : {{$driver->hp}}</h5>
                <h5>Asal Kab/Kota : {{$driver->kabkota}}</h5>
                <h5>Jenis Driver : {{$driver->jenisdriver}}</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h3>Detail Mobil</h3>
            </div>
            <div class="card-body">
                <img class="img-fluid mx-auto d-block mb-3" src="{{asset($driver->image)}}" width="300px">
                <h5>No Plat : {{$driver->noplat}}</h5>
                <h5>Merk Mobil : {{$driver->merkmobil}}</h5>
            </div>
        </div>
    </div>
</div>




@endsection