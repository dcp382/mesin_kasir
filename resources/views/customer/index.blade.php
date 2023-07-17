@extends('master.master')

@section('konten')
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h3 class="mb-3 mb-md-0">Data User</h3>
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
                    <th> Jenis Kelamin</th>
                    <th> Alamat </th>
                    <th> Email </th>
                    <th> No. Telepon </th>
                    <th> Aksi </th>
                </thead>
                <tbody>
                    @foreach ($customer as $cus )
                    <tr>
                        <td> {{$i++}}</td>
                        <td> {{$cus->nama}} </td>
                        @if ($cus->jenis_kelamin == 1)
                            <td>Laki - Laki </td>
                        @else
                            <td> Perempuan </td>
                        @endif
                        <td> {{$cus->alamat}} </td>
                        <td> {{$cus->email}} </td>
                        <td> {{$cus->no_telepon}} </td>
                        <td>
                            <a class="text-dark" href="#"><button class="btn btn-warning btn-sm" >Detail</button></a>
                            <button class="btn btn-danger btn-sm btndeletecust" data-id="{{ $cus->id }}"> Hapus </button>
                            {{-- <a href=" {{route('admin.hapus_customer',['id'=>$cus->id])}}"><button class="btn btn-danger btn-sm btndeletecust" data-id="{{ $cus->id }}"> Hapus </button></a> --}}
                        </td>
                    </tr>     
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah Data -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Supplier</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('admin.store_customer')}}" method="post">
                                @csrf
                                <div class="modal-body">
                                        <div class="form-group">
                                    <label for="nama_pelanggan">Nama</label>
                                    <input id="nama_pelanggan" class="form-control" name="nama_pelanggan" type="text">
                                    </div>
                                    <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" aria-label="Default select example">
                                                <option value="1">Laki - Laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                    <div class="form-group">
                                    <label for="alamat_pelanggan">Alamat</label>
                                    <input id="alamat_pelanggan" class="form-control" name="alamat_pelanggan" type="text">
                                    </div>
									<div class="form-group">
										<label for="email">Email address</label>
										<input type="email" class="form-control" id="email" placeholder="Email" name="email">
									</div>
                                    <div class="form-group">
                                    <label for="no_telepon">No. Telepon</label>
                                    <input id="no_telepon" class="form-control" name="no_telepon" type="text">
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