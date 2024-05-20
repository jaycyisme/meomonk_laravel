<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WishList;
use Illuminate\Http\Request;
use App\Models\WishlistProduct;
use Illuminate\Support\Facades\Session;

class WishListController extends Controller
{

    public function AuthLogin() {
        $user_id = Session::get('user_id');
        if ($user_id) {
            return redirect()->route('index');
        } else {
            return redirect()->route('login')->send();
        }
    }

    public function add(Request $request)
    {
        $user_id = Session::get('user_id');
    if (!$user_id) {
        return redirect()->route('login')->with('error_message', 'Please login to proceed.');
    }

    $productId = $request->input('id');
    $wishlist = Wishlist::firstOrCreate(['user_id' => $user_id]);

    $wishlistProduct = WishlistProduct::firstOrCreate([
        'wishlist_id' => $wishlist->id,
        'product_id' => $productId,
    ]);

    return redirect()->route('wishlist.index')->with('success_message', 'Product added to wishlist successfully.');
    }

    public function remove(Request $request)
{
    $user_id = Session::get('user_id');
    if (!$user_id) {
        return redirect()->route('login')->with('error_message', 'Please login to proceed.');
    }

    $user = User::find($user_id);

    $productId = $request->input('id');

    $wishlist = Wishlist::where('user_id', $user->id)->first();
    if ($wishlist) {
        WishlistProduct::where('wishlist_id', $wishlist->id)
            ->where('product_id', $productId)
            ->delete();
    }

    return redirect()->route('wishlist.index')->with('success_message', 'Product removed from wishlist successfully.');
}


    public function index()
    {
        $user_id = Session::get('user_id');
        if (!$user_id) {
            return redirect()->route('login')->with('error_message', 'Please login to proceed.');
        }

        if ($user_id) {
            $user = User::find($user_id);
        }
        $wishlist = Wishlist::with('products')->where('user_id', $user->id)->first();

        // Kiểm tra nếu wishlist tồn tại
        $products = $wishlist ? $wishlist->products : [];

        return view('.petshop.fastkart.front-end.wishlist', compact('products', 'wishlist'));
    }
}
