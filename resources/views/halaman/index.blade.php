@extends('layout/aplikasi')

@section('konten')
<h1 style="background-color: yellowgreen text-white"><marquee>Universitas Islam Raden Rahmat Kecamatan Kepanjen Kabupaten Malang</marquee></h1>
<nav class="navbar navbar-expand-lg bg-primary mb-5">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
            </li>
            <a class="nav-link active text  text-white" aria-current="page" href="#">Home</a>
            <li class="nav-item">
              <a class="nav-link text-white" href="/sesi/">Admin</a>
          </ul>
        </div>
      </div>
  </nav>
  <div class="container mt-5">
    <div class="row row-cols-2">
      <div class="col">
        <h1 class="mb-3">Kampus <br>Untuk <b>SEMUA</b></h1>
        <a href="" class="text-decoration-none bg-secondary rounded text-white p-2">DAFTAR SEKARANG</a>
    </div>
      <div class="col ">
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiu6-uNkM5ETQo3TBJAGIubEG4fJnM_5IMFCNfbQZSisuv0ZkLmtp09g_tbQQ2207Hz_UOSLdjvL6CS7hUJpfd5lubPzu12rNQYZYP2hZnHIlGMaXC6uhLZu_-a1jCS1-jbYBPphfotU_5PiwC-7zTCEJ1bKYeOltFpKsajg-FIg-w3pbvw_zl-ZdX7WUB0/s320/undraw_Books_re_8gea.png" alt="">
    </div>

    </div>
  </div>


@endsection
