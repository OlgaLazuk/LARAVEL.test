<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = $request->input('query', '');
        $category_id = $request->input('category');
        $products = Product::query()
            ->where('name', 'like', "%{$query}%")
            ->where('category_id', $category_id)
            ->get();

        return response()
            ->json($products)
            ->setStatusCode('500');
    }
}
