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
        <h6>Add Plan</h6>
        <form action="{{ route('admin.addPlan') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group py-4 mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Price</label>
                <input type="number" name="price" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Frequency</label>
                <select name="frequency" id="frequency" class="form-control w-full mt-2">
                    <option value="monthly">Monthly</option>
                    <option value="annually">Annually</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Features</label>
                <textarea name="feature" id="features" class="form-control"></textarea>
            </div>
            
           
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Save Plan</button>
            </div>


        </form>

    </div>
</div>
@endsection