<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\Admin\Product\ProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderByDesc('id')->paginate(10);
        return view('admin.product.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();

        if($request->hasFile('photo')){
        	$folder = date('Y-m-d');
        	$photo = $request->file('photo')->store("images/products/{$folder}");
        }else{
        	session()->flash('error', 'Ошибка при загрузке фото');
			return back();        
		}

        $productCreate = Product::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'price_type' => $data['price_type'],
            'market_type' => $data['market_type'],
            'photo' => $photo ?? null,
        ]);

        if(!$productCreate){
            return redirect()->back()->with('errors', 'Error to store product');   
        }

        return redirect()->back()->with('success', 'Товар/продукт був успішно добавлений');   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrfail($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();
        $product = Product::findOrFail($id);

        if($request->hasFile('photo')){
        	$folder = date('Y-m-d');
        	$data['photo'] = $request->file('photo')->store("images/products/{$folder}");
            Storage::delete("{$product['photo']}");
        }

        $product->update($data);
        return redirect()->back()->with('success', 'Товар/продукт був успішно оновлений');   

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if($product['photo']){
            Storage::delete("{$product['photo']}");
        }

        Product::destroy($id);
        return redirect()->back()->with('success', 'Товар був видалений');  
    }
}
