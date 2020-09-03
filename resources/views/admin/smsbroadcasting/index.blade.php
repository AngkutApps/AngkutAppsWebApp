@extends('admin.layouts.dashboard')
@section('title','SMS Broadcasting')
@section('content')

<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('sms.send')}}" name="add_name" id="add_name">
                    @csrf
                    <table class="table table-bordered" id="dynamic_field">
                        <tr>
                            <td><label>Phone Number</label></td>
                            <td><input type="text" name="phonenum[]" class="form-control" /></td>
                            <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                        </tr>
                    </table>
                    <div class="form-group">
                        <label>Text</label>
                        <textarea class="form-control" name="text"></textarea>
                    </div>
                    <button class="btn btn-primary float-right">Submit</button>
                    <button type="reset" class="btn btn-danger float-right mr-1">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection