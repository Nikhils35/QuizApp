@extends('welcome')
@section('content')
<style>
    
</style>
<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="card p-4 shadow" style="width: 400px;">
        <h3 class="text-center mb-4">Login</h3>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @error('user')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
        <form method="POST" action="userlogin">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input type="text" class="form-control" id="username" name="username">
                @error('username')   
                <p class="w-100 text-end" style="color:red;font-size:12px;">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')   
                <p class="w-100 text-end" style="color:red;font-size:12px;">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <div class="w-full mt-4 text-end"><a class="text-decoration-none" href="/signup">Signup<i class="ps-1 fa-solid fa-right-to-bracket"></i></a></div>

    </div>
@endsection