<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\BillStatus;
use App\Models\PaymentMethod;


class BillController extends Controller
{
    public function index(){


              $orders = Bill::where('is_active',1)
              ->with(['paymentMethod', 'billStatus'])->get();


            return view('admin.back-end.order-list', compact('orders'));

    }

    public function destroy($id)
{
    $bill = Bill::find($id);

    $bill->is_active = 0;
    $bill->save();

    return redirect()->route('orderList')->with('success', 'Order deleted successful.');
}

public function edit($id){

    $order = Bill::find($id);
    $bill_status = BillStatus::all();
    $payment_method = PaymentMethod::all();
    $payment_method = PaymentMethod::all();
    return view('admin.back-end.edit-bill', compact('order','bill_status','payment_method'));

}

public function update(){


    $order = User::findOrFail($id);

    $order->username = $request->input('username');
    $order->email = $request->input('email');
    $order->name =  $request->input('name');
    $order->phone_number =  $request->input('phone_number');
    $order->password = bcrypt( $request->input('password'));  // Mã hóa mật khẩu
    $order->role_id = $request->input('role_id');

    $order->save();
    return redirect()->back()->with('success', 'User update successfully');


}


}
