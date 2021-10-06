<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

//        $products = Product::query()->paginate(); ? показывает только первые 15 товаров
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
//        $product = new Product();
//        $product->fill($request->all());
//        $product->save();
//        return response()
//            ->redirectToRoute('admin.products.index');



//Загрузка данных(изображений)-плохая практика
//        $image = $request->file('photo');
//        $rez = $image->store('avatars');
//        $product = new Product();
//        $data = $request->all();
//        $data['photo'] = $rez;
//        $product->fill($data)->save();
//        dd($rez);


//Загрузка данных(изображений)-хорошая практика
        \Storage::putFile('test_upload', $request->file('photo'));

=======
        $product = new Product();
        $product->fill($request->all());
        $product->save();
        return response()
            ->redirectToRoute('admin.products.index');
>>>>>>> origin/master
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
//        $product = Product::query()->find($product);
        $product->fill($request->all());
        $product->save();
        return response()
            ->redirectToRoute('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
