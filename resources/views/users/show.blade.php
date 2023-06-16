@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        User Details
                    </div>
                    <div class="card-body">
                        <h5>Name: {{ $user->name }}</h5>
                        <h5>Email: {{ $user->email }}</h5>
                        <h5>Email Verified At: {{ $user->email_verified_at }}</h5>
                        <div id="password">
                            <h5>Password: </h5>
                        </div>
                        <button class="btn btn-primary" onclick="togglePassword()">Show Password</button>
                        <a href="{{ route('users.index') }}" class="btn btn-primary">Return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            var passwordDiv = document.getElementById('password');
            if (passwordDiv.innerHTML === '<h5>Password: </h5>') {
                passwordDiv.innerHTML = '<h5>Password: ' + "{{ $user->getOriginal('password') }}" + "</h5>";
            } else {
                passwordDiv.innerHTML = '<h5>Password: </h5>';
            }
        }
    </script>
@endsection
