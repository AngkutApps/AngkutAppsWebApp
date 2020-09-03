@extends('admin.layouts.dashboard')
@section('title','SMS Broadcasting')
@section('content')

<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">

            </div>
            <div class="card-body">
                <form id="ajaxform">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="title" class="form-control form-control-user rounded-pill @error('title') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label>Text</label>
                        <textarea class="form-control" name="text"></textarea>
                    </div>
                    <button class="btn btn-primary float-right save-data">Submit</button>
                    <button type="reset" class="btn btn-danger float-right mr-1">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection