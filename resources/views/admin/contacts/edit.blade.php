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
         <form action="{{ route('admin.updateContact',$contact->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group py-4 mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{$contact->name}}">
            </div>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{$contact->email}}">
            </div>
            <div class="form-group mb-3">
                
            <label for="">Subject</label>
                <input type="text" name="subject" class="form-control" value="{{$contact->subject}}">
            </div>
            <div class="form-group mb-3">
                <label for="">Message</label>
                <textarea name="message" id="message" class="form-control">{{$contact->message}}</textarea>
            </div>
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Save Contact</button>
            </div>
        </form>

    </div>
</div>
@endsection