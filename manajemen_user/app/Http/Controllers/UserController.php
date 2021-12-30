<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use App\Models\User;

class UserController extends Controller
{
    public function Index()
    {
        $data=User::all();
        return view('users.users',compact('data'));
    }
    public function create()
    {
        return view("users.create");
    }
    public function store(Request $request)
    {
        $data=array();
        $newname = Str::random(5);
        $avatar = $newname . '-' . time() . '.' . $request->avatar->extension();
        $request->avatar->move(public_path('avatar/'), $avatar);
        $data['username'] = $request->username;
        $data['name'] = $request->name;
        $data['roles'] = $request->roles;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['avatar'] = $avatar;
        $data['password'] = Hash::make($request->password);
        $data['email'] = $request->email;
        $data['status'] = $request->status;
        $insert=User::insert($data);
        return redirect('/');
    }
    public function edit(Request $request, $id)
    {
        $data = User::where('id',$id)->first();
        return view('users.edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = User::where('id',$id)->first();
       
        if ($request->avatar == NULL) {
            User::where('id',$request->id)->update([
                'username' => $request->username,
                'name' => $request->name,
                'roles' => $request->roles,
                'address' => $request->address,
                'phone' => $request->phone,
                'password' => $request->password,
                'email' => $request->email,
                'status' => $request->status
            ]);
        }else{
            $newname = Str::random(5);
            $avatar = $newname . '-' . time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('avatar/'), $avatar);
            File::delete(public_path('avatar/'.$data->avatar));
            User::where('id',$request->id)->update([
                'username' => $request->username,
                'name' => $request->name,
                'roles' => $request->roles,
                'address' => $request->address,
                'phone' => $request->phone,
                'avatar' => $avatar,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'status' => $request->status
            ]);
        }
        return redirect('/');
    }

    public function delete(Request $request, $id)
    {
        $data = User::where('id',$id)->first();
        File::delete(public_path('avatar/'.$data->avatar));
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }
}
