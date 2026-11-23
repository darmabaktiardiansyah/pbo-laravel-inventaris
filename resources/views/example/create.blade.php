@extends('layouts.app')

@section('title', 'Tambah Barang')

@section('content')

<h2>Form Tambah Barang</h2>

<form action="{{ route('example.store') }}" method="POST">
    @csrf

    <label>Kode Barang</label>
    <input type="text" name="kode" value="{{ old('kode') }}" placeholder="Contoh: BRG001" required>
    @error('kode')
        <div style="color:red; margin-bottom:10px;">{{ $message }}</div>
    @enderror

    <label>Nama Barang</label>
    <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Nama barang" required>
    @error('nama')
        <div style="color:red; margin-bottom:10px;">{{ $message }}</div>
    @enderror

    <label>Kategori</label>
    <input type="text" name="kategori" value="{{ old('kategori') }}" placeholder="Kategori barang" required>
    @error('kategori')
        <div style="color:red; margin-bottom:10px;">{{ $message }}</div>
    @enderror

    <label>Lokasi</label>
    <input type="text" name="lokasi" value="{{ old('lokasi') }}" placeholder="Lokasi barang" required>
    @error('lokasi')
        <div style="color:red; margin-bottom:10px;">{{ $message }}</div>
    @enderror

    <label>Jumlah</label>
    <input type="number" name="jumlah" value="{{ old('jumlah') }}" min="0" required>
    @error('jumlah')
        <div style="color:red; margin-bottom:10px;">{{ $message }}</div>
    @enderror

    <label>Kondisi</label>
    <select name="kondisi" required>
        <option value="">Pilih Kondisi</option>
        <option value="Baik" {{ old('kondisi') == 'Baik' ? 'selected' : '' }}>Baik</option>
        <option value="Rusak Ringan" {{ old('kondisi') == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan</option>
        <option value="Rusak Berat" {{ old('kondisi') == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat</option>
    </select>
    @error('kondisi')
        <div style="color:red; margin-bottom:10px;">{{ $message }}</div>
    @enderror

    <button type="submit">Simpan Barang</button>

    <a href="{{ route('example.index') }}" class="btn">
        Kembali
    </a>
</form>

@endsection