@extends('admin.layouts.dashboard')
@section('title','SMS Broadcasting')
@section('content')

<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('user.index')}}" class="btn btn-md btn-success rounded-pill shadow-lg"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">
                <form id="ajaxform" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control form-control-user rounded-pill @error('title') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <input type="text" name="body" class="form-control form-control-user rounded-pill @error('body') is-invalid @enderror">
                    </div>
                    <button class="btn btn-primary float-right save-data">Submit</button>
                    <button type="reset" class="btn btn-danger float-right mr-1">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection