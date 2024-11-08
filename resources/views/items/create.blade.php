@extends('layouts.app')

@section('content')
<div class="container-md">
    <h1>Tambah Barang</h1>

    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div class="mb-3 col-3">
            <label for="name" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        
        <div class="mb-3 col-3">
            <label for="category" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="category" name="category" required>
        </div>
        
        <div class="mb-3 col-3">
            <label for="unit" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="unit" name="unit" required>
        </div>
        
        <div class="mb-3 col-1">
            <label for="quantity" class="form-label">Kuantitas</label>
            <input type="number" class="form-control" id="quantity" name="qty" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('items.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection