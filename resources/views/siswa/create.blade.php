@extends('layout/aplikasi')

@section('konten')
<form method="POST" action="/siswa" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nomor_induk" class="form-label">NIM</label>
      <input type="text" class="form-control" name="nomor_induk" id="nomor_induk">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">alamat</label>
        <textarea class="form-control" name="alamat"></textarea>
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">passwprd</label>
        <textarea class="form-control" name="password"></textarea>
      </div>
      <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" name="foto" id="foto">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
</form>
@endsection
