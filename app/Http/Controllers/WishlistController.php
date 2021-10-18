<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    public function addToWishlist(Request $request)
    {
        $wishlist = Session::get('wishlist', []);
        $id = $request->input('product_id');
        $wishlist[$id] = ($wishlist[$id] ?? 0) + 1;
        Session::put('wishlist', $wishlist);
        return back();
    }

    public function showWishlist(Request $request)
    {
        $wishlist = collect(Session::get('wishlist', []));
        $ids = $wishlist->keys();
        $products = Product::query()->whereIn('id', $ids)->get();
        dump($products);
    }
}
