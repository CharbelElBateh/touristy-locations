@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Locations
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <a href="{{ route('locations.create') }}" class="btn btn-primary">Create New Location</a>
                                <a href="{{ route('admin') }}" class="btn btn-primary">Return</a>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($locations as $location)
                                    <tr>
                                        <td>{{ $location->name }}</td>
                                        <td>{{ $location->description }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('locations.show', $location) }}" class="btn btn-info flex-fill mr-2">Show</a>
                                                <a href="{{ route('locations.edit', $location) }}" class="btn btn-primary flex-fill mr-2">Edit</a>
                                                <form action="{{ route('locations.destroy', $location) }}" method="POST" style="display: inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger flex-fill" onclick="return confirm('Are you sure you want to delete this location?')">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
