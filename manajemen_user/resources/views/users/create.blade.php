@extends("layouts.app");

@section("content")
<div class="row pl-3 pt-2 mb-5 justify-content-center">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header bg-white pb-1">
            <h5>Create User</h5>
        </div>
        <div class="card-body">
          <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="FULLNAME">Full Name</label>
              <input placeholder="Full Name" type="text" name="name"class="form-control" required>
            </div>
            <div class="form-group">
              <label for="#">Username</label>
              <input placeholder="Username" type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="#">Roles</label>
              <select name="roles" class="form-control" required>
                  <option value="">Pilih Roles</option>
                  <option value="Admin">Administrator</option>
                  <option value="Staff">Staff</option>
                  <option value="Customer">Customer</option>
              </select>
            </div>
            <div class="form-group">
              <label for="PHONE">Phone Number</label>
              <input placeholder="Phone Number" name="phone" type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="ADDRESS">Address</label>
              <textarea name="address" placeholder="Address"class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label for="AVATAR">Avatar Image</label>
              <input type="file" name="avatar" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="EMAIL">Email</label>
              <input placeholder="user@gmail.com" type="email" name="email"class="form-control" required>
            </div>
            <div class="form-group">
              <label for="PASSWORD">Password</label>
              <input placeholder="Password" type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="#">Status</label>
              <select name="status" class="form-control" required>
                  <option value="">Pilih Status</option>
                  <option value="ACTIVE">Active</option>
                  <option value="INACTIVE">Non Active</option>
              </select>
            </div>
            <br>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Register">
            </div>
          </form>
        </div>
      </div>
@endsection
