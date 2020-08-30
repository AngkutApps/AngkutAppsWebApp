@extends('admin.layouts.dashboard')
@section('title','Edit User')
@section('content')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('user.index')}}" class="btn btn-md btn-success rounded-pill shadow-lg"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('user.update',$user->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control form-control-user rounded-pill @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="{{$user->email}}" class="form-control form-control-user rounded-pill @error('email') is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control form-control-user rounded-pill @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control form-control-user rounded-pill" name="password_confirmation" autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                    <button type="reset" class="btn btn-danger float-right mr-1">Reset</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection