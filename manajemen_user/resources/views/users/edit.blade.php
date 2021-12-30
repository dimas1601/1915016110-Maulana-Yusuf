@extends("layouts.app");

@section("content")
<div class="row pl-3 pt-2 mb-5 justify-content-center">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header bg-white pb-1">
            <h5>Update User</h5>
        </div>
        <div class="card-body">
          <form action="{{ url('update/'.$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="FULLNAME">Full Name</label>
              <input placeholder="Full Name" type="text" value="{{ $data->name }}" name="name"class="form-control" required>
            </div>
            <div class="form-group">
              <label for="#">Username</label>
              <input placeholder="Username" type="text" value="{{ $data->username }}" name="username" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="#">Roles</label>
              <select name="roles" class="form-control" required>
                  <option value="">Pilih Roles</option>
                  <option value="Admin" @php if($data->roles == "Admin"){ echo "selected"; } @endphp>Administrator</option>
                  <option value="Staff" @php if($data->roles == "Staff"){ echo "selected"; } @endphp>Staff</option>
                  <option value="Customer" @php if($data->roles == "Customer"){ echo "selected"; } @endphp>Customer</option>
              </select>
            </div>
            <div class="form-group">
              <label for="PHONE">Phone Number</label>
              <input placeholder="Phone Number" name="phone" value="{{ $data->phone }}" type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="ADDRESS">Address</label>
              <textarea name="address" placeholder="Address"class="form-control" required> {{  $data->address }}</textarea>
            </div>
            <div class="form-group">
              <label for="AVATAR">Avatar Image</label>
              <input type="file" name="avatar" value="{{ $data->avatar }}" class="form-control">
            </div>
            <div class="form-group">
              <label for="EMAIL">Email</label>
              <input placeholder="user@gmail.com" value="{{ $data->email }}" type="email" name="email"class="form-control" required>
            </div>
            <div class="form-group">
              <label for="PASSWORD">Password</label>
              <input placeholder="Password" type="password" value="{{$data->password}}" name="password" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="#">Status</label>
              <select name="status" class="form-control" required>
                  <option value="">Pilih Status</option>
                  <option value="ACTIVE" @php if($data->status == "ACTIVE"){ echo "selected"; } @endphp>Active</option>
                  <option value="INACTIVE" @php if($data->status == "INACTIVE"){ echo "selected"; } @endphp>Non Active</option>
              </select>
            </div>
            <br>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Update">
            </div>
          </form>
        </div>
      </div>
@endsection
