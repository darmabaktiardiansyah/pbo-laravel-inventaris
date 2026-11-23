
@extends('layouts.app')

@section('title', 'Edit Barang')

@section('content')

<h2>Form Edit Barang</h2>

<form action="{{ route('example.update', $kode) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Kode Barang</label>
    <input type="text" value="{{ $kode }}" disabled>

    <label>Nama Barang</label>
    <input type="text" name="nama"
        value="{{ $barang[$kode]['nama'] }}" required>

    <label>Kategori</label>
    <input type="text" name="kategori"
        value="{{ $barang[$kode]['kategori'] }}" required>

    <label>Lokasi</label>
    <input type="text" name="lokasi"
        value="{{ $barang[$kode]['lokasi'] }}" required>

    <label>Jumlah</label>
    <input type="number" name="jumlah"
        value="{{ $barang[$kode]['jumlah'] }}" min="0" required>

    <label>Kondisi</label>
    <select name="kondisi" required>
        <option value="Baik" {{ $barang[$kode]['kondisi'] == 'Baik' ? 'selected' : '' }}>Baik</option>
        <option value="Rusak Ringan" {{ $barang[$kode]['kondisi'] == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan</option>
        <option value="Rusak Berat" {{ $barang[$kode]['kondisi'] == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat</option>
    </select>

    <button type="submit">Update Barang</button>

    <a href="{{ route('example.index') }}" class="btn">
        Kembali
    </a>
</form>

@endsection
