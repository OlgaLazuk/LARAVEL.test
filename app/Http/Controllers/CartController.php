<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $cart = Session::get('cart', []);
        $id = $request->input('product_id');

        if (isset($cart[$id])) {
            $cart[$id] += 1;
        } else {
            $cart[$id] = 1;
        }
//        аналогичная запись if-else
//$cart[$id] = ($cart[$id] ?? 0) +1;

        Session::put('cart', $cart);
        return back();
//      dd($request->all());
    }

    public function showCart(Request $request)
    {
        $categories = Category::all();

        $cartCount = Session::all();
        if(isset($cartCount['cart'])){
            $show = count($cartCount['cart']);
        }else{
            $show = 0;
        }


        $cart = collect(Session::get('cart', []));
        $ids = $cart->keys();
        $products = Product::query()->whereIn('id', $ids)->get();

//        dump($products);
        return  view('cart', compact('products', 'categories', 'show'));
    }
    public function destroy($id)
    {
        $product = collect(Session::all());

        $delete = $product['cart'];
        $product->forget($delete['14}']);

//        dd(Session::all());
        $product->forget($id);

        return response()
            ->redirectToRoute('cart');
    }
}
