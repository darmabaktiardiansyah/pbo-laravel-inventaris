@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')

<h2>Daftar Inventaris Barang</h2>

@if(session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

<a href="{{ route('example.create') }}" class="btn">
    + Tambah Barang
</a>

<br><br>

@if(count($barang) > 0)

<table>
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Lokasi</th>
            <th>Jumlah</th>
            <th>Kondisi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($barang as $kode => $item)
        <tr>
            <td>{{ $item['kode'] }}</td>
            <td>{{ $item['nama'] }}</td>
            <td>{{ $item['kategori'] }}</td>
            <td>{{ $item['lokasi'] }}</td>
            <td>{{ $item['jumlah'] }}</td>
            <td>{{ $item['kondisi'] }}</td>
            <td>
                <a href="{{ route('example.show', $kode) }}">Detail</a> |
                <a href="{{ route('example.edit', $kode) }}">Edit</a>

                <form action="{{ route('example.destroy', $kode) }}"
                      method="POST"
                      onsubmit="return confirm('Yakin ingin menghapus barang ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@else

<p>Belum ada data barang.</p>

@endif

@endsection