<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang_keluar;

class BarangKeluar extends Controller
{
    //
    public function index() {
        $barang_keluar = Barang_keluar::get();

        return view('barang.barang_keluar.index', ["barang_keluar" => $barang_keluar]);

    }
    public function tambah()
    {
        return view('barang.barang_keluar.form');
    }
    public function simpan(Request $request)
    {
        $data = [
            'kode_barang'=>$request->kode_barang,
            'nama_barang'=>$request->nama_barang,
            'kategori_barang'=>$request->kategori_barang,
            'harga'=>$request->harga,
            'jumlah'=>$request->jumlah,
        ];

        Barang_keluar::create($data);

        return redirect()->route('barang_keluar');
    }

    public function edit($id)
    {
    $barang_keluar = Barang_keluar::find($id)->first();

    return view('barang.barang_keluar.form', ['barang_keluar'=>$barang_keluar]);

    }

    public function update($id, Request $request)
    {
        $data = [
            'kode_barang'=>$request->kode_barang,
            'nama_barang'=>$request->nama_barang,
            'kategori_barang'=>$request->kategori_barang,
            'harga'=>$request->harga,
            'jumlah'=>$request->jumlah,
        ];

        Barang_keluar::find($id)->update($data);

        return redirect()->route('barang_keluar');
    }

    public function hapus($id)
    {
        Barang_keluar::find($id)->delete();

        return redirect()->route('barang_keluar');
    }

}
