@extends('admin.layouts.dashboard')
@section('title','Edit Driver')
@section('content')
<form method="POST" action="{{route('driver.update',$driver->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{route('driver.index')}}" class="btn btn-md btn-success rounded-pill shadow-lg"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control form-control-user rounded-pill @error('name') is-invalid @enderror" value="{{$driver->name}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control form-control-user rounded-pill @error('email') is-invalid @enderror" value="{{$driver->email}}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Kab/Kota</label>
                        <input type="text" name="kabkota" class="form-control form-control-user rounded-pill @error('kabkota') is-invalid @enderror" value="{{$driver->kabkota}}">
                        @error('kabkota')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" name="hp" class="form-control form-control-user rounded-pill @error('hp') is-invalid @enderror" value="{{$driver->hp}}">
                        @error('hp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nik Ktp</label>
                        <input type="text" name="nikktp" class="form-control form-control-user rounded-pill @error('nikktp') is-invalid @enderror" value="{{$driver->nikktp}}">
                        @error('nikktp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control form-control-user rounded-pill @error('password') is-invalid @enderror" value="{{$driver->password}}">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                    <button type="reset" class="btn btn-danger float-right mr-1">Reset</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5>Data Mobil</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>No plat</label>
                        <input type="text" name="noplat" class="form-control form-control-user rounded-pill @error('noplat') is-invalid @enderror" value="{{$driver->noplat}}">
                        @error('noplat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Merk Mobil</label>
                        <input type="text" name="merkmobil" class="form-control form-control-user rounded-pill @error('merkmobil') is-invalid @enderror" value="{{$driver->merkmobil}}">
                        @error('merkmobil')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Driver</label>
                        <input type="text" name="jenisdriver" class="form-control form-control-user rounded-pill @error('jenisdriver') is-invalid @enderror" value="{{$driver->jenisdriver}}">
                        @error('jenisdriver')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Sumber</label>
                        <input type="text" name="sumber" class="form-control form-control-user rounded-pill @error('sumber') is-invalid @enderror" value="{{$driver->sumber}}">
                        @error('sumber')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Image</label><br>
                        <img src="{{asset($driver->image)}}" class="img-fluid mb-2" width="300px">
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection