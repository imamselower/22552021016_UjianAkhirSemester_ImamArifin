@extends('layout/aplikasi')
@section('konten')
<h1>{{ $judul }}</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quibusdam.</p>
<p>
    <ul>
        <li>email : {{ $kontak['email']}}</li>
    </ul>
</p>
@endsection