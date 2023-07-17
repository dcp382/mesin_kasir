@extends('master.master')

@section('konten')
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h3 class="mb-3 mb-md-0">Data Penjualan</h3>
          </div>
        </div>

        <div class="mt-2">
            <table class="table mt-3" id="myTable">
                <thead class="thead-dark">
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Produk</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($produk as $p)
                        <tr>
                            <td>{{$p->kode_barang}}</td>
                            <td>{{$p->nama_barang}}</td>
                            <td>{{$p->jumlah_barang}} </td>
                            <td>{{$p->harga}}</td>
                            <td><button class="btn btn-success"></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection