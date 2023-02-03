@extends('Backend.auth.layouts.master')
@section('title','Register')
@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-md-6 offset-3">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
                <div class="mb-3">
                    <a href="" class="btn btn-primary" type="submit">Register</a>
                </div>
            </form>
            {{-- <a href="{{ route('login') }}">Already Register?</a> --}}
        </div>
    </div>
</div>
@endsection