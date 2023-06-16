@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Edit Location
                    </div>
                    <div class="card-body">
                        <form action="{{ route('locations.update', $location) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $location->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $location->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <div>
                                <strong>Current Image:</strong>
                                <br>
                                <img src="{{ asset('storage/'.$location->image) }}" alt="Location Image" class="img-fluid">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('locations.index') }}" class="btn btn-primary">Return</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
