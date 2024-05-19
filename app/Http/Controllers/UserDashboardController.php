<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

session_start();
class UserDashboardController extends Controller
{


    public function AuthLogin() {

        $user_id = Session::get('user_id');
        if($user_id) {
            return redirect()->route('index');
        }else {
            return redirect()->route('login')->send();
        }
    }


    public function index(){
        $this -> AuthLogin();
        $userData = Auth::user();
        $name = $userData->name;
        $email = $userData->email;
        $phone_number = $userData->phone_number;
        $password = $userData->password;


        return view('petshop.fastkart.front-end.user-dashboard',compact('name','email','phone_number','password'));
    }


}
