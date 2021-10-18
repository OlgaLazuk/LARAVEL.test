<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $product = Product::first();
//        $categories = Category::find(1);
//        dd($categories->products);

//        $brands = Brand::with('country')->get();

//$country = $brand->country;
//$country = Country::query()->find(2);
//dd($country->brands);


//        foreach ($brands as $brand) {
//            echo $brand->country->name;
//        }

        $categories = Category::all();

        return view('home.main', compact('categories'));
    }

    public function random()
    {
        $products = Product::query()
            ->inRandomOrder()
            ->limit(10)
            ->get();
//dd($products);
        return view('home.main');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $products = Product::query()
            ->where('name', 'LIKE', '%' . $search . '%')
            ->orderBy('name')
            ->get();
        if (!empty($products)) {
//            Session::flash('success', 'Product not found!');

            return view('search', compact('products'));
        }
    }


}
