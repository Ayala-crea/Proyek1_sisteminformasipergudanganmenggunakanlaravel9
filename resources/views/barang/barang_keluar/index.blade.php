@extends('layouts.app')

@section('title', 'Data Barang Keluar')

@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">data barang Keluar</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('barang.barang_keluar.tambah') }}"class="btn btn-primary mb-3">tambah barang</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>kode barang</th>
                            <th>nama barang</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal keluar</th>
                            <th>stok</th>
                            <th>Jumlah</th>
                            <th>aksi</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($barang_keluar as $BK)
                            <tr>
                                <td></td>
                                <td>{{ $BK->kode_barang }}</td>
                                <td>{{ $BK->nama_barang }}</td>
                                <td>{{ $BK->Tanggal_masuk }}</td>
                                <td>{{ $BK->Tanggal_keluar }}</td>
                                <td>{{ $BK->Terjual }}</td>
                                <td>{{ $BK->Jumlah }}</td>
                                <td>
                                    <a href="" class="btn btn-warning">edit</a>
                                    <a href="" class="btn btn-danger">hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
