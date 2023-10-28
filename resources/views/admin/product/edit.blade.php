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
        <h6>Edit Service</h6>
        <form action="{{ route('admin.updateProduct', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group py-4 mb-3">
                <select class="form-control" name="category">
                    <option value="" readonly>Select Category</option>
                    @forelse($categories as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                    @empty
                    @endforelse
                </select>
            </div>

            <div class="form-group py-4 mb-3">
                <label for="">Service Name</label>
                <input type="text" name="name" class="form-control" value="{{$product->name}}">
            </div>
            <div class="form-group mb-3">
                <label for="">Short Description</label>
                <input type="text" name="short_desc" class="form-control" value="{{$product->short_description}}">
            </div>
            <div class="form-group mb-3">
                <label for="">Long Description</label>
                <textarea name="long_desc" id="casestudies-desc" class="form-control">{{$product->long_description}}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">Service Image</label>
                <input type="file" name="product_image" class="form-control">
                <img src="{{ asset('uploads/product/'.$product->service_image) }}" alt="Image">

            </div>
            <div class="form-group py-2">
                <label for="MetaTitle">Meta Title</label>
                <input type="text" id="MetaTitle" name="Meta_Title" class="@error('MetaTitle') is-invalid @enderror form-control" placeholder="Meta Title" value="{{$product->seo_title}}">
            </div>
            <div class="form-group py-2">
                <label for="MetaKeyword">Meta Keyword</label>
                <input type="text" id="MetaKeyword" name="Meta_Keyword" class="@error('MetaKeyword') is-invalid @enderror form-control" placeholder="Meta Keyword" value="{{$product->seo_keywords}}">
            </div>
            <div class="form-group py-2">
                <label for="MetaDescription">Meta Description</label>
                <input type="text" id="MetaDescription" name="Meta_Description" class="@error('MetaDescription') is-invalid @enderror form-control" placeholder="Meta Description" value="{{$product->seo_description}}">
            </div>
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Update Service</button>
            </div>


        </form>

    </div>
</div>
@endsection