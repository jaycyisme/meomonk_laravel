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
        $reviews = Review::all();
        return view('admin.back-end.product-review', compact('reviews'));
    }


    public function delete($id)
    {

        $review = Review::findOrFail($id);
        $review ->delete();
        return redirect()->back()->with('success', '$review deleted successfully!');

    }
}
