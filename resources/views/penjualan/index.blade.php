@extends('master.master')

@section('konten')
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h3 class="mb-3 mb-md-0">Data Penjualan</h3>
          </div>
        </div>
        <div class="row mt-5">
            <div class="col-4 mt-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                Tambah Data
                </button>
            </div>
        </div>
        <div class="mt-2">
            <table class="table mt-3" id="myTable">
                
            </table>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pilih Barang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <table class="table mt-3" id="myTable">
                <thead class="thead-dark">
                    <th> No </th>
                    <th> Kode Barang </th>
                    <th> Nama Barang </th>
                    <th> Jumlah Stok </th>
                    <th> Harga Barang </th>
                    <th> Aksi </th>
                </thead>
                <tbody>
                    @foreach ($produk as $p)
                     <tr>
                        <td> {{$i++}}</td>
                        <td> {{$p->kode_barang}} </td>
                        <td> {{$p->nama_barang}} </td>
                        <td> {{$p->jumlah_barang}} </td>
                        <td> {{$p->harga}} </td>
                        <td> <button class="btn btn-primary mdi mdi-cart"></button> </td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>


@endsection