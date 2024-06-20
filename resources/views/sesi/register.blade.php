@extends('layout/aplikasi')

@section('konten')
    <div class="w-50 border rounded px-3 py-3 mx-auto">
        <h1>Register</h1>
        <form action="/sesi/create" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" value="{{ Session::get('name') }}" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Passwrod</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" class="btn btn-primary" type="submit">Register</button>
        </div>
        </form>
    </div>
@endsection