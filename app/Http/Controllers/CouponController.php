<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\CouponStatus;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return redirect()->route('couponList');
        }else {
            return redirect()->route('adminLogin')->send();
        }
    }

    public function index()
    {
        $this->AuthLogin();
        $coupons = Coupon::all(); // Lấy danh sách tất cả các coupon
        return view('admin.back-end.coupon-list', compact('coupons'));
    }

    public function create()
    {
        $this->AuthLogin();
        $coupons = Coupon::all();
        $coupon_status = CouponStatus::all();
        return view('admin.back-end.create-coupon', compact('coupons', 'coupon_status'));
    }

    public function store(Request $request)
    {
        $this->AuthLogin();
        // Validate dữ liệu từ request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:coupon',
            'discount' => 'required|integer',
            'coupon_status_id' => 'required',
        ]);

        // Tạo mới một coupon và gán các thuộc tính từ dữ liệu request
        $coupon = new Coupon();
        $coupon->title = $validatedData['title'];
        $coupon->code = $validatedData['code'];
        $coupon->discount = $validatedData['discount'];
        $coupon->coupon_status_id = $validatedData['coupon_status_id'];

        // Lưu coupon mới vào cơ sở dữ liệu
        $coupon->save();

        // Redirect về trang danh sách coupon hoặc trang chi tiết coupon đã tạo mới
        return redirect()->back()->with('success', 'Coupon created successfully');
    }






    public function edit($id)
    {
        $this->AuthLogin();
        $coupon = Coupon::findOrFail($id);
        $coupon_status = CouponStatus::all();
        return view('admin.back-end.edit-coupon', compact('coupon', 'coupon_status'));
    }

    public function update(Request $request, $id)
    {
        $this->AuthLogin();
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:coupon,code,' . $id,
            'discount' => 'required|integer',
            'coupon_status_id' => 'required|exists:coupon_status,id',
        ]);

        $coupon = Coupon::findOrFail($id);
        $coupon->title = $validatedData['title'];
        $coupon->code = $validatedData['code'];
        $coupon->discount = $validatedData['discount'];
        $coupon->coupon_status_id = $validatedData['coupon_status_id'];
        $coupon->save();

        return redirect()->route('couponList')->with('success', 'Coupon updated successfully.');
    }

    public function destroy($id)
    {
        $this->AuthLogin();
        // Xóa coupon theo ID
        $coupon = Coupon::find($id);

        if (!$coupon) {
            return redirect()->back()->with('error', 'Coupon not found');
        }

        $coupon->delete();

        return redirect()->route('couponList')->with('success', 'Coupon deleted successfully');
    }
}
