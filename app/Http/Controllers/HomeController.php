<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       $products = Product::all();
       dump($products);

        return view('home.main');
    }

    public function aboutUs()
    {
        return view('home.about');
    }

}
