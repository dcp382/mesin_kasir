@extends('master.master')
@section('konten')
    <div class="page-content">
        <div class="card">
              <div class="card-body">
                    <h6 class="card-title">Tambah Data User</h6>
								<form id="signupForm" class="forms-sample" method="post" action="{{route('admin.store_user')}}">
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
									<button type="submit" class="btn btn-primary mr-2">Submit</button>
								</form>
                                <a href="{{route('admin.user')}}"><button class="btn btn-light mt-2">Cancel</button></a>
              </div>
    </div>
@endsection