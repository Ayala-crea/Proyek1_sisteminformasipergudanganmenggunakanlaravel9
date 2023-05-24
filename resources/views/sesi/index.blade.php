@extends('layout.login')

@section('contents')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        <form action="/sesi/login" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-tabel">email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-tabel">password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button class="btn btn-primary" name="submit" type="submit">Login</button>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary"><a style="text-decoration:none; color:aliceblue;" href={{ route('register') }}>Register</a></button>
        </div>
    </form>
    </div>

@endsection