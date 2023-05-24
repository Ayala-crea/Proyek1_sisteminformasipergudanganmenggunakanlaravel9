@extends('layouts.app')

@section('title', 'Data Barang')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">data barang</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('barang.tambah') }}"class="btn btn-primary mb-3">tambah barang</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>kode barang</th>
                        <th>nama barang</th>
                        <th>kategori barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($barang as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->kode_barang }}</td>
                        <td>{{ $row->nama_barang }}</td>
                        <td>{{ $row->kategori_barang }}</td>
                        <td>{{ $row->harga }}</td>
                        <td>{{ $row->jumlah }}</td>
                        <td>
                            <a href={{ route('barang.barang_keluar') }} class="btn btn-secondary">Detail</a>
                            <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-warning">edit</a>
                            <a href="{{ route('barang.hapus', $row->id) }}" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection