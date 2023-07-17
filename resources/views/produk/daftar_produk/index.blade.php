@extends('master.master')

@section('konten')
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h3 class="mb-3 mb-md-0">Data Produk</h3>
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
                    <th> Kode Barang </th>
                    <th> Nama Barang </th>
                    <th> Jenis Barang </th>
                    <th> Jumlah Barang </th>
                    <th> Harga Barang </th>
                    <th> Supplier </th>
                    <th> Aksi </th>
                </thead>
                <tbody>
                    @foreach ($produk as $p )
                    <tr>
                        <td> {{$i++}}</td>
                        <td> {{$p->kode_barang}} </td>
                        <td> {{$p->nama_barang}} </td>
                        <td> {{$p->jenbar->jenis_barang}} </td>
                        <td> {{$p->jumlah_barang}} </td>
                        <td> {{$p->harga}} </td>
                        <td> {{$p->supplier->nama}} </td>
                        <td>
                            <a class="text-dark" href="#"><button class="btn btn-warning btn-sm" >Edit</button></a>
                            <button class="btn btn-danger btn-sm btndeletecust" data-id="{{ $p->kode_barang }}"> Hapus </button>
                            {{-- <a href=" {{route('admin.hapus_customer',['id'=>$cus->id])}}"><button class="btn btn-danger btn-sm btndeletecust" data-id="{{ $cus->id }}"> Hapus </button></a> --}}
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
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('admin.store_produk')}}" method="post">
                                @csrf
                                <div class="modal-body">
                                        <div class="form-group">
                                            <label for="kode_barang">Kode Barang</label>
                                            <input id="kode_barang" class="form-control" name="kode_barang" type="text">
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
                                            <label for="jumlah_barang">Jumlah Barang</label>
                                            <input id="jumlah_barang" class="form-control" name="jumlah_barang" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga Barang</label>
                                            <input id="harga" class="form-control" name="harga" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="supplier">Supplier</label>
                                            <select name="supplier" id="supplier" class="form-select" aria-label="Default select example">
                                                @foreach ($supplier as $s)
                                                    <option value="{{$s->id}}"> {{$s->nama}} </option>
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