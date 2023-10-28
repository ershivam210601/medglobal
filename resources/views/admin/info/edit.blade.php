@section('title','Admin')
@extends('admin.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>
            <a onclick="window.history.back()" class="btn btn-primary float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">

        <h6>Edit Contact</h6>
        <form action="{{ route('admin.updateInfo',$info->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group py-4 mb-3">
                <label for="">Mobile No</label>
                <input type="text" name="mobile" class="form-control" value="{{$info->mobile}}">
            </div>
            <div class="form-group py-4 mb-3">
                <label for="">TelePhone</label>
                <input type="number" name="landline" class="form-control" value="{{$info->landline}}">
            </div>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{$info->email}}">
            </div>
            <div class="form-group mb-3">
                <label for="">Email Support</label>
                <input type="text" name="helpmail" class="form-control" value="{{$info->helpmail}}">
            </div>
            <div class="form-group mb-3">

                <label for="">Address</label>
                <input type="text" name="address" class="form-control" value="{{$info->address}}">
            </div>
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Save Contact</button>
            </div>
        </form>

    </div>
</div>
@endsection