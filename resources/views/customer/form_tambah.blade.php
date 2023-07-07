@extends('master.master')
@section('konten')
    <div class="page-content">
        <div class="card">
              <div class="card-body">
                    <h6 class="card-title">Tambah Data User</h6>
								<form id="signupForm" class="forms-sample" method="post" action="{{route('admin.store_customer')}}">
                                    @csrf
									<div class="form-group">
                                    <label for="nama_pelanggan">Nama</label>
                                    <input id="nama_pelanggan" class="form-control" name="nama_pelanggan" type="text">
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
									<button type="submit" class="btn btn-primary mr-2">Submit</button>
								</form>
                                <a href="{{route('admin.customer')}}"><button class="btn btn-light mt-2">Cancel</button></a>
              </div>
    </div>
@endsection