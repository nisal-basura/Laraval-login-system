@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>{{ __('Dashboard') }}</h4>
                </div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>{{ Auth::user()->name }}, you are successfully logged in!</h5>
                    <p>Welcome to the system. Explore the options below:</p>
                    
                    <!-- Centering buttons -->
                    <div class="mt-4">
                        <a href="#" class="btn btn-success btn-lg mr-2">Profile</a>
                        <a href="#" class="btn btn-info btn-lg mr-2">Settings</a>
                        <a href="#" class="btn btn-danger btn-lg">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

