@extends('master.master')

@section('konten')
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h3 class="mb-3 mb-md-0">Data Pembelian</h3>
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
            <table class="table mt-3" id="myTable" >
                <thead class="thead-dark">
                    <th> No </th>
                    <th> Nama Supplier </th>
                    <th> Tanggal Beli </th>
                    <th> Jenis Pembayaran </th>
                    <th> Produk </th>
                    <th> Jumlah </th>
                    <th> Harga </th>
                    <th> Jenis Barang </th>
                    <th> Aksi </th>
                </thead>
                <tbody>
                    @foreach ($pembelian as $p )
                    <tr>
                        <td> {{$i++}}</td>
                        <td> {{$p->supplier->nama}} </td>
                        <td> {{$p->tanggal_beli}} </td>
                        <td> {{$p->jenis_pembayaran->nama_pembayaran}} </td>
                        <td> {{$p->produk}} </td>
                        <td> {{$p->jumlah}} </td>
                        <td> {{$p->harga}} </td>
                        <td> {{$p->jenis_barang->jenis_barang}} </td>
                        <td>
                            <a class="text-dark" href="#"><button class="btn btn-warning btn-sm" >Edit</button></a>
                            <button class="btn btn-danger btn-sm btndeletecust" data-id="{{ $p->kode_barang }}"> Hapus </button>
                        </td>
                    </tr>     
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pembelian</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('admin.store_pembelian')}}" method="post">
                                @csrf
                                <div class="modal-body">
                                        <div class="form-group">
                                            <label for="supplier">Supplier</label>
                                            <select name="supplier" id="supplier" class="form-select" aria-label="Default select example">
                                                @foreach ($supplier as $s)
                                                    <option value="{{$s->id}}"> {{$s->nama}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_beli">Tanggal Beli</label>
                                            <input id="tanggal_beli" class="form-control" name="tanggal_beli" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_barang">Nama Barang</label>
                                            <input id="nama_barang" class="form-control" name="nama_barang" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_barang">Jenis Barang</label>
                                            <select name="jenis_barang" id="jenis_barang" class="form-select" aria-label="Default select example">
                                                @foreach ($jenbar as $j)
                                                    <option value="{{$j->id}}"> {{$j->jenis_barang}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_barang">Jumlah barang</label>
                                            <input id="jumlah_barang" class="form-control" name="jumlah_barang" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input id="harga" class="form-control" name="harga" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_pembayaran">Jenis Pembayaran</label>
                                            <select name="jenis_pembayaran" id="jenis_pembayaran" class="form-select" aria-label="Default select example">
                                                @foreach ($jenis_pembayaran as $j)
                                                    <option value="{{$j->id}}"> {{$j->nama_pembayaran}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
    
@endsection