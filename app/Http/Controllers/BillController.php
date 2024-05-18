<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\BillProduct;
use App\Models\BillStatus;
use App\Models\PaymentMethod;


class BillController extends Controller
{
    public function index(){


              $orders = Bill::where('is_active',1)
              ->with(['paymentMethod', 'billStatus'],'billProducts.product')->get();

            foreach ($orders as $order) {
                $totalPrice = 0;
                foreach ($order->billProducts as $billProduct) {
                    $totalPrice += $billProduct->quantity * $billProduct->product->price;
                }
                $order->total_price = $totalPrice;
            }


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
        $totalPrice = 0;
        foreach ($order->billProducts as $billProduct) {
            $totalPrice += $billProduct->quantity * $billProduct->product->price;
        }
        $bill_status = BillStatus::all();
        $payment_method = PaymentMethod::all();
        $payment_method = PaymentMethod::all();
        return view('admin.back-end.edit-bill', compact('order','bill_status','payment_method','totalPrice'));

    }

    public function update(Request $request, $id){


        $order = Bill::findOrFail($id);

        $order->payment_method_id = $request->input('payment_method');
        $order->bill_status_id = $request->input('delivery_status');
        $order->total_money = $request->input('amount');


        $order->save();
        return redirect()->back()->with('success', 'Order update successfully');


    }


    public function show($id)
    {
        $bill = Bill::with('billProducts.product')->find($id);

        if (!$bill) {
            return redirect()->route('orders.index')->with('error', 'Bill not found.');
        }

        $totalPrice = 0;
        foreach ($bill->billProducts as $billProduct) {
            $totalPrice += $billProduct->quantity * $billProduct->product->price;
        }
        return view('admin.back-end.order-detail', compact('bill','totalPrice'));
    }








}
