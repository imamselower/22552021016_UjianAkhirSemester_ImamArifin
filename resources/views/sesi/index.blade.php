@extends('layout/aplikasi')

@section('konten')

<h1 class="text-center">SISTEM INFORMASI <br> AKADEMIK KAMPUS <br> Universitas Islam Raden Rahmat</h1>
    <div class="w-50 border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        <form action="/sesi/login/" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Passwrod</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" class="btn btn-primary" type="submit">Login</button>
        </div>
        
        </form>
        <div class="mb-3 d-grid">
            <button name="submit" class="btn btn-success" type="submit"><a href="/sesi/register" class="text-decoration-none text-white">Register</a></button>
        </div>
    </div>

@endsection