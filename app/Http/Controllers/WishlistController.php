<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::all();


        $wishCount = Session::all();
        if(isset($wishCount['wishlist'])){
            $wishlistCount = count($wishCount['wishlist']);
        }else{
            $wishlistCount = 0;
        }

        $wishlist = collect(Session::get('wishlist', []));
        $ids = $wishlist->keys();
        $products = Product::query()->whereIn('id', $ids)->get();
        return view('wishlist', compact('products', 'categories', 'wishlistCount'));
    }

    public function destroy($id)
    {
        $product = collect(Session::all());

        $delete = $product['cart'];
        $product->forget($delete['14']);

//        dd(Session::all());
        $product->forget($id);

        return response()
            ->redirectToRoute('cart');
    }

}
