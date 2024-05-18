<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashBoardControlller extends Controller
{
    public function index(){
        return view('petshop.fastkart.front-end.user-dashboard');
    }

}
