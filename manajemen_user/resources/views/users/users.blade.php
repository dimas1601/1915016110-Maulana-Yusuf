@extends("layouts.app")

@section("content")
<div class="row pl-3 pt-2">

              <div class="col-lg-12 pl-3">
                <h5>Data User</h5>
                 <a href="{{ url('create') }}"><button class="btn btn-success d-block mb-2 my-2 mr-2">Tambah User</button></a>
                  <table class="table shadow-0">
                      <thead>
                        <tr class="text-center">
                          <th scope="col">No</th>
                          <th scope="col">Avatar</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Roles</th>
                          <th scope="col">Username</th>
                          <th scope="col">Address</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Status</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                          $no=1;
                        @endphp
                        @if($data->isEmpty())
                          <tr>
                            <td colspan="9" class="text-center">Tidak Ada Data</td>
                          </tr>
                        @endif
                        @foreach($data as $user)
                        
                        <tr class="text-center">
                          <td>{{ $no++ }}</td>
                          <td ><a href="avatar/{{ $user->avatar }}" target="_blank"><img width="50%" src="{{ asset('avatar/'.$user->avatar) }}"></a></td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->roles }}</td>
                          <td>{{ $user->username }}</td>
                          <td>{{ $user->address }}</td>
                          <td>{{ $user->phone }}</td>
                          <td>{{ $user->status }}</td>
                          <td style="display: flex; margin: 5px;">
                            <a href="{{ url('edit/'.$user->id) }}">
                              <button class="btn btn-warning d-block mb-2 mr-2">Update</button>
                            </a>
                            <a href="{{ url('delete/'.$user->id) }}" onclick="return confirm('Yakin Ingin Menghapus?')">
                              <button class="btn btn-danger d-block mb-2">Delete</button>
                            </a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                </div>
@endsection
