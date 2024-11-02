@extends('layouts.app')
@section('content')

<div class="container-md">
<!-- FORM PENCARIAN -->
<div class="pb-3">
    <form class="d-flex" action="{{ url('siswa') }}" method="get">
        <input class="form-control me-1" type="search" name="katakunci" placeholder="Masukan kata kunci" aria-label="Search">
        <button class="btn btn-secondary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
          </svg></button>
    </form>
</div>

<!-- TOMBOL TAMBAH DATA -->
<div class="pb-3">
    <a href="{{ url('siswa/create') }}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
      </svg> Masukan Barang</a>
</div>

<!-- TEMPLATE TABEL -->
<table class="table">
    <thead>
        <tr>
            <th class="col-md-1">No</th>
            <th class="col-md-2">Kategori</th>
            <th class="col-md-3">Nama Barang</th>
            <th class="col-md-2">Satuan</th>
            <th class="col-md-2">Kuantitas</th>
            <th class="col-md-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <!-- TEMPAT BUAT DATA -->
    </tbody>
</table>
</div>
@endsection