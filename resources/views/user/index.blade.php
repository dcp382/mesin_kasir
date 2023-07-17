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
                    <th> Nama </th>
                    <th> Email </th>
                    <th> Aksi </th>
                </thead>
                <tbody>
                    @foreach ($user as $u )
                    <tr>
                        <td> {{$u->name}} </td>
                        <td> {{$u->email}} </td>
                        <td>
                            <a class="text-dark" href="#"><button class="btn btn-warning btn-sm" >Detail</button></a>
                            <button class="btn btn-danger btn-sm btnuserdelete" data-id="{{ $u->id }}"> Hapus </button>
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
                            <form action="{{route('admin.store_user')}}" method="post">
                                @csrf
                                <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input id="name" class="form-control" name="name" type="text">
                                    </div>
									<div class="form-group">
										<label for="email">Email address</label>
										<input type="email" class="form-control" id="email" placeholder="Email" name="email">
									</div>
                                    <label for="role">Role</label>
										<select class="role" id="role" name="role">
											<option selected disabled>Role</option>
											<option value="admin">Admin</option>
											<option value="user">User</option>
										</select>
									<div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" class="form-control" name="password" type="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password">Confirm password</label>
                                        <input id="confirm_password" class="form-control" name="confirm_password" type="password">
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