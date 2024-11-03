@extends('layouts.app')

@section('content')
<div class="container-md">
    <h1>Edit Barang</h1>

    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3 col-3">
            <label for="name" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required>
        </div>
        
        <div class="mb-3 col-3">
            <label for="category" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $item->category }}" required>
        </div>
        
        <div class="mb-3 col-3">
            <label for="unit" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="unit" name="unit" value="{{ $item->unit }}" required>
        </div>
        
        <div class="mb-3 col-1">
            <label for="quantity" class="form-label">Kuantitas</label>
            <input type="number" class="form-control" id="quantity" name="qty" value="{{ $item->qty }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('items.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection