<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return redirect()->route('productReview');
        }else {
            return redirect()->route('adminLogin')->send();
        }
    }


    public function store(Request $request){
        // dd($request->all());
        $this->AuthLogin();
        $description = $request->input('description') ?? ' ';

        $user_id = Session::get('user_id');
        if($user_id) {
            $review = new Review();
            $review->description = $description;
            $review->product_id = $request->input('product_id');
            $review->rate = $request->input('rating');
            $review->user_id = $user_id;
            // dd($review);
            $review->save();
            return redirect()->back()->with('success', 'review successfully!');
        }else{
            return redirect()->back()->with('error', 'You need to login!');
        }

    }


    public function index()
    {
        $this->AuthLogin();
        $reviews = Review::all();
        return view('admin.back-end.product-review', compact('reviews'));
    }


    public function delete($id)
    {
        $this->AuthLogin();
        $review = Review::findOrFail($id);
        $review ->delete();
        return redirect()->back()->with('success', '$review deleted successfully!');

    }
}
