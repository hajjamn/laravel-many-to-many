@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">
            Welcome Page
        </h1>
        <div>
            <a href="{{ route('login') }}">
                <button class="btn btn-primary mt-3">Login</button>
            </a>
        </div>
    </div>
</div>

<div class="content">
</div>
@endsection