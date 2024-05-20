<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

use App\Models\User;
use App\Models\Address;
use App\Models\Bill;

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
        $this->AuthLogin();
        $userData = Auth::user();
        $name = $userData->name;
        $email = $userData->email;
        $phone_number = $userData->phone_number;
        $password = $userData->password;

        $userId= Session::get('user_id');
        $user = User::find($userId);

        if ($user) {
            $addresses = Address::where('user_id', $userId)->get();

            $bills = Bill::where('is_active', 1)

            ->where('user_id',$userId)
            ->get();


            $totalOrders  = $bills->count();

            $orderHistory = Bill::where('user_id', $userId)
            ->with(['paymentMethod', 'billStatus'], 'billProducts.product')
            ->get();


            // dd($totalOrders);
            // dd($addresses);
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }

        return view('petshop.fastkart.front-end.user-dashboard', compact('name', 'email', 'phone_number', 'password', 'totalOrders', 'addresses','orderHistory'));

    }



    public function create(){
        return view('petshop.fastkart.front-end.add-new-address');
    }


        public function store(Request $request)
    {
        $userId= Session::get('user_id');

        $address = new Address();
        $address->user_id = $userId;
        $address->address_line_1 = $request->input('address_line_1');
        $address->address_line_2 = $request->input('address_line_2');
        $address->city = $request->input('city');
        $address->zip_code = $request->input('zip_code');
        $address->save();

        return redirect()->route('userDashboard')->with('success', 'Address added successfully.');
    }

    public function destroy($id)
    {
        $address = Address::find($id);
        if ($address) {
            $address->delete();
            return redirect()->route('userDashboard')->with('success', 'Address deleted successfully.');
        } else {
            return redirect()->route('userDashboard')->with('error', 'Address not found.');
        }
    }



    public function edit($id){
        $address = Address::findOrFail($id);
        return view('.petshop.fastkart.front-end.edit-address', compact('address'));
    }


    public function update(Request $request, $id)
    {
        $address = Address::findOrFail($id);
        $address->address_line_1 = $request->input('address_line_1');
        $address->address_line_2 = $request->input('address_line_2');
        $address->city = $request->input('city');
        $address->zip_code = $request->input('zip_code');


        $address->save();
        return redirect()->route('userDashboard')->with('success', 'Address updated successfully.');
    }

    public function setDefaultAddress(Request $request)
    {
        $userId= Session::get('user_id');
        $addressId = $request->input('address_id');

        Address::where('user_id', $userId)->update(['is_default' => false]);

        $address = Address::where('user_id', $userId)->where('id', $addressId)->first();
        if ($address) {
            $address->is_default = true;
            $address->save();
        }

        return redirect()->route('userDashboard')->with('success', 'Default address updated successfully.');
    }






}
