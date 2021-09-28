<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
//        dd($request->all());
        return view('catalog.catalog');
    }

    public function category(Request $request,Category $category)
    {
//        $category = Category::find($category);
//        dump($request->all());
//        dd('category');
        $categories = Category::all();
        $products = Product::query()->limit(9)->get();
//        dd($categories);

//        foreach ($categories as $item){
//            dump($item->name);
//        }
//        $categories = Category::query()->where('active', 1)->get();
        return view('catalog.catalog',
            compact('category', 'categories', 'products'));
    }

    public function product(Request $request, $category, $product)
    {
//        dd([$category, $product]);
        return view('catalog.product');
    }
}
