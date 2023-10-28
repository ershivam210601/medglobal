@section('title','Admin')
@extends('admin.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>
                <a href="{{ url('add-services') }}" class="btn btn-primary float-end">Add Services</a>
            </h4>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Service Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Services as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img src="{{ asset('uploads/service/'.$item->banner_image) }}" width="70px" height="70px" alt="Image">
                        </td>
                        <td>
                            <a href="{{ url('edit-service/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                        <td>
                            {{-- <a href="{{ url('delete-service/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                            <form action="{{ url('delete-service/'.$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection