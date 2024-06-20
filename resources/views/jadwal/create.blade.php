@extends('layout/aplikasi')

@section('konten')
<form method="POST" action="/jadwal" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nama_hari" class="form-label">Hari</label>
      <input type="text" class="form-control" name="nama_hari" id="nama_hari" value="{{ Session::get('nomor_induk') }}">
    </div>
    <div class="mb-3">
        <label for="matkul" class="form-label">Mata Kuliah</label>
        <input type="text" class="form-control" name="matkul" id="matkul" value="{{ Session::get('nama') }}">
      </div>
      
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
</form>
@endsection