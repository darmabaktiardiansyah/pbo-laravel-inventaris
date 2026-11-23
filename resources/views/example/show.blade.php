
@extends('layouts.app')

@section('title', 'Detail Barang')

@section('content')

<h2>Detail Barang</h2>

<table>
    <tr>
        <th>Kode Barang</th>
        <td>{{ $barang[$kode]['kode'] }}</td>
    </tr>
    <tr>
        <th>Nama Barang</th>
        <td>{{ $barang[$kode]['nama'] }}</td>
    </tr>
    <tr>
        <th>Kategori</th>
        <td>{{ $barang[$kode]['kategori'] }}</td>
    </tr>
    <tr>
        <th>Lokasi</th>
        <td>{{ $barang[$kode]['lokasi'] }}</td>
    </tr>
    <tr>
        <th>Jumlah</th>
        <td>{{ $barang[$kode]['jumlah'] }}</td>
    </tr>
    <tr>
        <th>Kondisi</th>
        <td>{{ $barang[$kode]['kondisi'] }}</td>
    </tr>
</table>

<br>

<a href="{{ route('example.index') }}" class="btn">
    Kembali
</a>

@endsection
