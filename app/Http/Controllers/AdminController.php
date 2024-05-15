<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class AdminController extends Controller
{
    public function index() {
        return view('.admin.back-end.login');
    }

    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return redirect()->route('showDashboard');
        }else {
            return redirect()->route('adminLogin')->send();
        }
    }

    public function showDashboard() {
        $this->AuthLogin();
        return view('.admin.back-end.body-index');
    }

    public function login(Request $request) {
        $credentials = $request->only('username', 'password');

        $user = User::where('username', $credentials['username'])->first();

        if($user) {
            Session::put('admin_name', $user->name);
            Session::put('admin_id', $user->id);
            if ($user && Hash::check($credentials['password'], $user->password)) {
                if ($user->is_active) {
                    Auth::login($user);

                    if ($user->role_id == 1) {
                        return redirect()->route('showDashboard');
                    } elseif ($user->role_id == 2) {
                        return back()->with('error', 'Error.');
                    }
                } else {
                    return back()->with('error', 'Your account is not active. Please verify your email.');
                }
            } else {
                return back()->with('error', 'Invalid username or password. Please try again.');
            }
        }else{
            Session::put('message', 'Invalid username or password. Please try again.');
            return redirect()->route('adminLogin');
        }


    }


    public function logOut() {
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return redirect()->route('adminLogin');
    }
}
