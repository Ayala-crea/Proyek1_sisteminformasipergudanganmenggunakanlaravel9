@extends('layouts.app')
@section('title', 'Form Barang keluar')
@section('contents')
    <form action="{{ isset($barang_keluar) ?route('barang.barang_keluar.tambah.update', $barang_keluar->id): route('barang.barang_keluar.tambah.simpan') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <!-- Basic Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{ isset($barang_keluar)?'Form edit barang keluar':'Form tambah barang keluar' }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="kode_barang">kode barang</label>
                                <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ isset($barang_keluar) ? $barang_keluar->kode_barang : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">nama barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ isset($barang_keluar) ? $barang_keluar->nama_barang : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="Tanggal_keluar">Tanggal Keluar</label>
                                <input type="date" class="form-control" id="Tanggal_keluar" name="Tanggal_keluar" value="{{ isset($barang_keluar) ? $barang_keluar->Tanggal_keluar : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="kategori_barang">Kategori Barang</label>
                                <input type="text" class="form-control" id="kategori_barang" name="kategori_barang" value="{{ isset($barang_keluar) ? $barang_keluar->kategori_barang : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="Terjual">Terjual</label>
                                <input type="decimal" class="form-control" id="Terjual" name="Terjual" value="{{ isset($barang_keluar) ? $barang_keluar->Terjual : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">jumlah barang</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ isset($barang_keluar) ? $barang_keluar->jumlah : '' }}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">simpan</button>
                        </div>
                    </div>

                </div>
            </div>
    </form>

@endsection
