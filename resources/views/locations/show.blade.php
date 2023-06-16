@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Location Details
                    </div>
                    <div class="card-body">
                        <h4>Name: {{ $location->name }}</h4>
                        <p>Description: {{ $location->description }}</p>
                        <div>
                            <strong>Image:</strong>
                            <br>
                            <img src="{{ asset('storage/'.$location->image) }}" alt="Location Image" class="img-fluid">
                        </div>
                        <a href="{{ route('locations.index') }}" class="btn btn-primary">Return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
