@extends('master.master')

@section('konten')
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h3 class="mb-3 mb-md-0">Data Supplier</h3>
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
                    <th> Nama </th>
                    <th> Alamat </th>
                    <th> No. Telepon </th>
                    <th> Email </th>
                    <th> Aksi </th>
                </thead>
                <tbody>
                    @foreach ($supplier as $sup )
                    <tr>
                        <td> {{$i++}}</td>
                        <td> {{$sup->nama}} </td>
                        <td> {{$sup->alamat}} </td>
                        <td> {{$sup->no_telepon}} </td>
                        <td> {{$sup->email}} </td>
                        <td>
                            <a class="text-dark" href="#"><button class="btn btn-warning btn-sm" >Edit</button></a>
                            <button class="btn btn-danger btn-sm btndeletecust" data-id="{{ $sup->id }}"> Hapus </button>
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jenis Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="#" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="jenis_barang">Jenis Barang</label>
                                    <input id="jenis_barang" class="form-control" name="jenis_barang" type="text">
                                    </div>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
    
@endsection