@extends('layout/aplikasi')

@section('konten')
    <div>
        <a href="/siswa" class="btn btn-secondary">Kembali</a>
        <h1>{{ $data->Nama }}</h1>
        <p>
            <b>nomor_induk</b>{{ $data->nomor_induk }}
        </p>
        <p>
            <b>Alamat</b>{{ $data->alamat }}
        </p>
        
    </div>
@endsection