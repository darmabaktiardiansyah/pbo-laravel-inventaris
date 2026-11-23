<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        $barang = session('barang', []);
        return view('example.index', compact('barang'));
    }

    public function create()
    {
        return view('example.create');
    }

    public function store(Request $request)
    {
        $barang = session('barang', []);

        $data = $request->validate([
            'kode'     => 'required|string|max:20',
            'nama'     => 'required|string|max:100',
            'kategori' => 'required|string|max:50',
            'lokasi'   => 'required|string|max:100',
            'jumlah'   => 'required|integer|min:0',
            'kondisi'  => 'required|string',
        ]);

        // Cek kode kembar
        if (isset($barang[$data['kode']])) {
            return back()
                ->withInput()
                ->withErrors(['kode' => 'Kode barang sudah digunakan.']);
        }

        $barang[$data['kode']] = $data;

        session(['barang' => $barang]);

        return redirect()->route('example.index')
            ->with('success', 'Barang berhasil ditambahkan!');
    }

    public function show($kode)
    {
        $barang = session('barang', []);

        abort_unless(isset($barang[$kode]), 404);

        return view('example.show', compact('barang', 'kode'));
    }

    public function edit($kode)
    {
        $barang = session('barang', []);

        abort_unless(isset($barang[$kode]), 404);

        return view('example.edit', compact('barang', 'kode'));
    }

    public function update(Request $request, $kode)
    {
        $barang = session('barang', []);

        abort_unless(isset($barang[$kode]), 404);

        $data = $request->validate([
            'nama'     => 'required|string|max:100',
            'kategori' => 'required|string|max:50',
            'lokasi'   => 'required|string|max:100',
            'jumlah'   => 'required|integer|min:0',
            'kondisi'  => 'required|string',
        ]);

        $barang[$kode] = array_merge($barang[$kode], $data);

        session(['barang' => $barang]);

        return redirect()->route('example.index')
            ->with('success', 'Barang berhasil diperbarui!');
    }

    public function destroy($kode)
    {
        $barang = session('barang', []);

        abort_unless(isset($barang[$kode]), 404);

        unset($barang[$kode]);

        session(['barang' => $barang]);

        return redirect()->route('example.index')
            ->with('success', 'Barang berhasil dihapus!');
    }
}