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
                <a href="{{route('admin.form_tambah_customer')}}"><button class="btn btn-success"> Tambah data </button></a>
            </div>
        </div>
        <div class="mt-2">
            <table class="table mt-3" id="myTable" >
                <thead class="thead-dark">
                    <th> Nama </th>
                    <th> Alamat </th>
                    <th> Email </th>
                    <th> No. Telepon </th>
                    <th> Aksi </th>
                </thead>
                <tbody>
                    @foreach ($customer as $cus )
                    <tr>
                        <td> {{$cus->nama}} </td>
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
@endsection