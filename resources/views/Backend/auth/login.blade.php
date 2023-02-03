@extends('Backend.auth.layouts.master')
@section('title','login')
@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-md-6 offset-3">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <a href="" type="submit" class="btn btn-primary">Login</a>
                </div>
            </form>
            <p>Not Registered? <a href="{{ route('register') }}">Register</a></p>
            <p>Forget Password? <a href="{{ route('password.request') }}">Forget Password</a></p>
        </div>
    </div>
</div>
@endsection