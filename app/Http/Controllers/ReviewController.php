<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request){
        // dd($request->all());
        $user_id = Session::get('user_id');
        if($user_id) {
            $review = new Review();
            $review->description = $request->input('description');
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
}
