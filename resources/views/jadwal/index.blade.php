@extends('layout/aplikasi');

@section('konten')
<a href="/jadwal/create" class="btn btn-primary">+Tambah Data Jadwal</a>
<table class="table">
    <thead>
        <tr>
            <th>Hari</th>
            <th>Mata Kuliah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->nama_hari }}</td>
                <td>{{ $item->matkul }}</td>
                <td>
                <a class="btn btn-warning btn-sm" href="{{ url('/jadwal/'. $item->nama_hari.'/edit') }}">Edit</a>
                <form onsubmit="return confirm('Yakin Mau hapus Data')" action="{{ '/jadwal/'.$item->nama_hari }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Del</button>
                </form>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection