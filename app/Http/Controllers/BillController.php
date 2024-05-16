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

public function update(Request $request, $id){


    $order = Bill::findOrFail($id);

    $order->payment_method_id = $request->input('payment_method');
    $order->bill_status_id = $request->input('delivery_status');
    $order->total_money = $request->input('amount');


    $order->save();
    return redirect()->back()->with('success', 'Order update successfully');


}


}
