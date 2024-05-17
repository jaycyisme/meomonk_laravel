<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
session_start();

class CheckoutController extends Controller
{
    public function AuthLogin() {
        $user_id = Session::get('user_id');
        if($user_id) {
            return redirect()->route('index');
        }else {
            return redirect()->route('login')->send();
        }
    }

    public function login_checkout() {
        $this->AuthLogin();
        return view('petshop.fastkart.front-end.checkout');
    }
}
