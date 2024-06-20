@extends('layout/aplikasi')

@section('konten')
<form method="POST" action="{{ '/jadwal/'.$data->nama_hari }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="nama_hari" class="form-label">Hari</label>
      <input type="text" class="form-control" name="nama_hari" id="nama_hari" value="{{ $data->nama_hari }}">
    </div>
    <div class="mb-3">
        <label for="matkul" class="form-label">Mata Kuliah</label>
        <input type="text" class="form-control" name="matkul" id="matkul" value="{{ $data->matkul }}">
      </div>
      
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
</form>
@endsection