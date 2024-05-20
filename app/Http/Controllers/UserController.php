<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return redirect()->route('allUsers');
        }else {
            return redirect()->route('adminLogin')->send();
        }
    }

        public function index()
    {
        $this->AuthLogin();
        $users = User::all();
        return view('admin.back-end.all-users', compact('users'));
    }

    public function create()
    {
        $this->AuthLogin();
        $users = User::all();
        $role_status = Role::all();
        return view('admin.back-end.add-new-user', compact('users', 'role_status'));
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'username' => 'required|string|max:15|unique:users',
        //     'email' => 'required|string|max:255',
        //     'name' => 'required|string|max:255',
        //     'phone_number' => 'required|integer',
        //     'password' => 'required|string|max:255',
        //     'role_id' => 'required'
        // ]);
        $this->AuthLogin();
        $user = new User();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->name =  $request->input('name');
        $user->phone_number =  $request->input('phone_number');
        $user->password = bcrypt( $request->input('password'));  // Mã hóa mật khẩu
        $user->role_id = $request->input('role_id');

        $user->save();
        return redirect()->back()->with('success', 'User added successfully');
    }

    public function edit($id)
        {
            $this->AuthLogin();
            $user = User::findOrFail($id);
            $role_status = Role::all();
            return view('admin.back-end.edit-user', compact('user', 'role_status'));
        }

    public function update(Request $request, $id)
    {
        $this->AuthLogin();
        $user = User::findOrFail($id);

        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->name =  $request->input('name');
        $user->phone_number =  $request->input('phone_number');
        $user->password = bcrypt( $request->input('password'));  // Mã hóa mật khẩu
        $user->role_id = $request->input('role_id');

        $user->save();
        return redirect()->back()->with('success', 'User update successfully');

    }


    public function destroy($id)
        {
            $this->AuthLogin();
            $user = User::find($id);
            if ($user) {
                $user->delete();
                return redirect()->route('allUsers')->with('success', 'User deleted successfully');
            } else {
                return redirect()->route('allUsers')->with('error', 'User not found');
            }
        }



}

